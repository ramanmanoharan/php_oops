<?php 
include('config.php');
$productcategory = new Database;
$category = $_POST['category'];
$fileupload = $productcategory->productcategoryadd($category);



?>