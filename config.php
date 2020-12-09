<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'blues');

Class Database{
	function __construct(){
		$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		$this->dbh= $conn;
		// echo "connected";
		if(mysqli_connect_errno()){
			echo "failed to connect".mysqli_connect_error();
		}
	}


		public function fetchdata()
		{
			$result = mysqli_query($this->dbh,"SELECT * FROM `user`");
			return $result;
		}

		public function fetchonerecord($userid){
			$fetchones = mysqli_query($this->dbh, "SELECT * FROM `user` WHERE `id`= $userid");
			return $fetchones;
		}

		public function login($name, $password){
			$checklog = mysqli_query($this->dbh, "SELECT * FROM `user` WHERE `uid` = 1");
			$result = mysqli_fetch_array($checklog);
			$result['name'];
			$result['password'];
			if($name== $result['name'] AND $password== $result['password']){
				$_SESSION['name']= $result['name'];
				header('location:dashboard.php');

			}else{
				$msg = 'USER NAME OF PASSWORD ERROR';
				header('location:index.php?error=1');
			}


			return $checklog;

		}


		public function insert($name,$email,$phone){
			$insert = mysqli_query($this->dbh, "INSERT INTO `user`(`name`, `email`, `phone`)VALUES('$name','$email','$phone')");
			return $insert;
		}
		public function upd($uid,$name,$email,$phone){
			$update = mysqli_query($this->dbh, "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone'  WHERE id=$uid");

			return $update;
		}

		public function delete($del){
			$erase = mysqli_query($this->dbh, "DELETE FROM `user` WHERE `id`=$del");
			return $erase;
		}
		// service function starts here
		public function services($title, $description, $image, $target_dir, $target_file, $filemove){

			$services = mysqli_query($this->dbh, "INSERT INTO `services`(`title`, `description`, `image`)VALUES('$title', '$description', '$image')");
			if($services){
			header("location:services.php?success=1");
			}else{
				header("location:services.php?error=1");
			}
			return $services;



		}
		public function servicefetchone($updateid){
			$serfetchones = mysqli_query($this->dbh, "SELECT * FROM `services` WHERE `id`= $updateid");
			return $serfetchones;
		}
		public function servicefetch()
		{
			$result = mysqli_query($this->dbh,"SELECT * FROM `services`");
			return $result;
		}
		public function servupdate($title, $description, $image, $target_dir, $target_file, $filemove, $serid){
			$current_timestamp = time();
			$updated = date("yy-m-d",$current_timestamp);
			$serviceupdate= mysqli_query($this->dbh, "UPDATE `services` SET `title`='$title',`description`='$description',`image`='$image',`updated_at`='$updated' WHERE `id`= '$serid'");
			if($serviceupdate){
			header("location:service-list.php?success=1");
			}else{
			header("location:service-list.php?error=1");
			}


			return $serviceupdate;

		}

		public function servicedel($del){
			$deleteservice = mysqli_query($this->dbh, "DELETE FROM `services` WHERE `id`=$del");
			return $deleteservice;
		}
		// services function ends here
		
		// slider starts here
		public function slider($title, $description, $image, $target_dir, $target_file, $filemove){

			$slider = mysqli_query($this->dbh, "INSERT INTO `slider`(`title`, `description`, `image`)VALUES('$title', '$description', '$image')");
			if($slider){
			header("location:slider.php?success=1");
			}else{
				header("location:slider.php?error=1");
			}
			return $slider;



		}
		public function sliderfetchone($updateid){
			$slidefetchones = mysqli_query($this->dbh, "SELECT * FROM `slider` WHERE `id`= $updateid");
			return $slidefetchones;
		}
		public function sliderfetch()
		{
			$result = mysqli_query($this->dbh,"SELECT * FROM `slider`");
			return $result;
		}
		public function sliderupdate($title, $description, $image, $target_dir, $target_file, $filemove, $serid){
			$current_timestamp = time();
			$updated = date("yy-m-d",$current_timestamp);
			$sliderupdate= mysqli_query($this->dbh, "UPDATE `slider` SET `title`='$title',`description`='$description',`image`='$image',`updated_at`='$updated' WHERE `id`= '$serid'");
			if($sliderupdate){
			header("location:slider-list.php?success=1");
			}else{
			header("location:slider-list.php?error=1");
			}


			return $sliderupdate;

		}

		public function sliderdel($del){
			$deleteslider = mysqli_query($this->dbh, "DELETE FROM `slider` WHERE `id`=$del");
			return $deleteslider;
		}

		// slider ends here
		public function galleryfetch()
		{
			$result = mysqli_query($this->dbh,"SELECT * FROM `gallery`");
			return $result;
		}
		public function galleryfetchone($updateid){
			$galfetchones = mysqli_query($this->dbh, "SELECT * FROM `gallery` WHERE `id`= $updateid");
			return $galfetchones;
		}

		public function gallerycategoryfetch(){
			$result = mysqli_query($this->dbh,"SELECT * FROM `gallerycategory`");
			return $result;
		}
		public function gallerycategoryadd($category){

			$galcategory = mysqli_query($this->dbh, "INSERT INTO `gallerycategory`(`categoryname`)VALUES('$category')");
			if($galcategory){
			header("location:gallerycategory.php?success=1");
			}else{
				header("location:gallerycategory.php?error=1");
			}
			return $galcategory;



		}
		public function galcatdel($del){
			$deltegalcat = mysqli_query($this->dbh, "DELETE FROM `gallerycategory` WHERE `id`=$del");
			return $deltegalcat;
		}
		public function galcatfetchone($updateid){
			$galcatfetchones = mysqli_query($this->dbh, "SELECT * FROM `gallerycategory` WHERE `id`= $updateid");
			return $galcatfetchones;
		}
		public function galcatupdate($categoryname, $catid){
			
			$categoryupdate= mysqli_query($this->dbh, "UPDATE `gallerycategory` SET `categoryname`='$categoryname' WHERE `id`= '$catid'");
			if($categoryupdate){
			header("location:gallerycategory.php?success=1");
			}else{
			header("location:gallerycategory.php?error=1");
			}


			return $categoryupdate;

		}
		public function productcategoryadd($category){

			$procategory = mysqli_query($this->dbh, "INSERT INTO `productcategory`(`categoryname`)VALUES('$category')");
			if($procategory){
			header("location:productcategory.php?success=1");
			}else{
				header("location:productcategory.php?error=1");
			}
			return $procategory;

		}
		public function productcategoryfetch(){
			$result = mysqli_query($this->dbh,"SELECT * FROM `productcategory`");
			return $result;
		}
		public function procatfetchone($updateid){
			$procatfetchones = mysqli_query($this->dbh, "SELECT * FROM `productcategory` WHERE `id`= $updateid");
			return $procatfetchones;
		}
		public function procatupdate($categoryname, $catid){
			
			$procategoryupdate= mysqli_query($this->dbh, "UPDATE `productcategory` SET `categoryname`='$categoryname' WHERE `id`= '$catid'");
			if($procategoryupdate){
			header("location:productcategory.php?success=1");
			}else{
			header("location:productcategory.php?error=1");
			}


			return $procategoryupdate;

		}
		public function procatdel($del){
			$delteprocat = mysqli_query($this->dbh, "DELETE FROM `productcategory` WHERE `id`=$del");
			return $delteprocat;
		}
		public function productfetch()
		{
			$result = mysqli_query($this->dbh,"SELECT * FROM `product`");
			return $result;
		}
		public function productfetchone($updateid){
			$profetchones = mysqli_query($this->dbh, "SELECT * FROM `product` WHERE `id`= $updateid");
			return $profetchones;
		}
		public function contact()
		{
			$clientmessage = mysqli_query($this->dbh,"SELECT * FROM `contact`");
			return $clientmessage;
		}

		
		

	}




?>