<?php 
include('productcontroller.php');
$productinsert = new Product;
$title = $_POST['title'];
$category = $_POST['category'];
$description = $_POST['content'];
$image = $_FILES['fileToUpload']['name'];
$target_dir = "product/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filemove = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileupload = $productinsert->insertproduct($title, $category, $description, $image, $target_dir, $target_file, $filemove);



?>