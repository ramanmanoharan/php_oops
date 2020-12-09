<?php
include('config.php');
$services = new Database;
$title = $_POST['title'];
$serid = $_POST['servid'];
$description = $_POST['content'];
$image = $_FILES['fileToUpload']['name'];
$target_dir = "services/";

if($image==''){

	$fetchone = new Database;
	$updateid = $_POST['servid'];
	$sql = $fetchone->servicefetchone($updateid);
	$row = mysqli_fetch_array($sql);
	
	$image = $row['image'];
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$filemove = '';

	$fileupload = $services->servupdate($title, $description, $image, $target_dir, $target_file, $filemove, $serid);
}
else{
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filemove = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileupload = $services->servupdate($title, $description, $image, $target_dir, $target_file, $filemove, $serid);

}








 ?>