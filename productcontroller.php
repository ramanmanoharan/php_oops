<?php 
include('gallercontroller.php');
Class Product Extends Gallery{

		public function insertproduct($title, $category, $description, $image, $target_dir, $target_file, $filemove){

			$productinsert = mysqli_query($this->dbh, "INSERT INTO `product`(`title`, `description`, `image`, `category`)VALUES('$title', '$description', '$image', '$category')");
			if($productinsert){
			header("location:product.php?success=1");
			}else{
				//echo "INSERT INTO `product`(`title`, `description`, `image`, `category`)VALUES('$title', '$description', '$image', '$category')";
				header("location:product.php?error=1");
			}
			return $productinsert;
		}
		public function proupdate($title, $category, $description, $image, $target_dir, $target_file, $filemove, $serid){
			$current_timestamp = time();
			$updated = date("yy-m-d",$current_timestamp);
			$productupdate= mysqli_query($this->dbh, "UPDATE `product` SET `title`='$title',`description`='$description',`image`='$image', `category`='$category', `updated_at`='$updated' WHERE `id`= '$serid'");
			if($productupdate){
			header("location:product-list.php?success=1");
			}else{
			header("location:product-list.php?error=1");
			}


			return $productupdate;

		}
		public function productdel($del){
			$deleteproduct = mysqli_query($this->dbh, "DELETE FROM `product` WHERE `id`=$del");
			return $deleteproduct;
		}
		
}



?>