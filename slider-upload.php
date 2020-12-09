<?php 
include('config.php');
$slider = new Database;
$title = $_POST['title'];
$description = $_POST['content'];
$image = $_FILES['fileToUpload']['name'];
$target_dir = "slider/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filemove = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileupload = $slider->slider($title, $description, $image, $target_dir, $target_file, $filemove);



?>