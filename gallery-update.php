<?php
include('gallercontroller.php');
$gallery = new Gallery;
$title = $_POST['title'];
$category = $_POST['category'];
$serid = $_POST['servid'];
$description = $_POST['content'];
$image = $_FILES['fileToUpload']['name'];
$target_dir = "gallery/";

if($image==''){

	$fetchone = new Gallery;
	$updateid = $_POST['servid'];
	$sql = $fetchone->galleryfetchone($updateid);
	$row = mysqli_fetch_array($sql);
	
	$image = $row['image'];
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$filemove = '';

	$fileupload = $gallery->galupdate($title, $category, $description, $image, $target_dir, $target_file, $filemove, $serid);
}
else{
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filemove = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileupload = $gallery->galupdate($title, $category, $description, $image, $target_dir, $target_file, $filemove, $serid);

}








 ?>