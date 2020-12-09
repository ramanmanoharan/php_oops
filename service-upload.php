<?php 
include('config.php');
$services = new Database;
$title = $_POST['title'];
$description = $_POST['content'];
$description = htmlspecialchars($description);
$image = $_FILES['fileToUpload']['name'];
$target_dir = "services/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filemove = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileupload = $services->services($title, $description, $image, $target_dir, $target_file, $filemove);



?>