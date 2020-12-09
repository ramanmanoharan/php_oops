<?php 
include('gallercontroller.php');
$galleryinsert = new Gallery;
$title = $_POST['title'];
$category = $_POST['category'];
$description = $_POST['content'];
$image = $_FILES['fileToUpload']['name'];
$target_dir = "gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filemove = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileupload = $galleryinsert->insertgallery($title, $category, $description, $image, $target_dir, $target_file, $filemove);



?>