<?php 
include('config.php');
Class Gallery Extends Database{

		public function insertgallery($title, $category, $description, $image, $target_dir, $target_file, $filemove){

			$galleryinsert = mysqli_query($this->dbh, "INSERT INTO `gallery`(`title`, `description`, `image`, `category`)VALUES('$title', '$description', '$image', '$category')");
			if($galleryinsert){
			header("location:gallery.php?success=1");
			}else{
				header("location:gallery.php?error=1");
			}
			return $galleryinsert;
		}
		public function galupdate($title, $category, $description, $image, $target_dir, $target_file, $filemove, $serid){
			$current_timestamp = time();
			$updated = date("yy-m-d",$current_timestamp);
			$galleryupdate= mysqli_query($this->dbh, "UPDATE `gallery` SET `title`='$title',`description`='$description',`image`='$image', `category`='$category', `updated_at`='$updated' WHERE `id`= '$serid'");
			if($galleryupdate){
			header("location:gallery-view.php?success=1");
			}else{
			header("location:gallery-view.php?error=1");
			}


			return $galleryupdate;

		}
		public function gallerydel($del){
			$deletegallery = mysqli_query($this->dbh, "DELETE FROM `gallery` WHERE `id`=$del");
			return $deletegallery;
		}
		
}



?>