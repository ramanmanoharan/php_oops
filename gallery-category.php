<?php 
include('config.php');
$gallerycategory = new Database;
$category = $_POST['category'];
$fileupload = $gallerycategory->gallerycategoryadd($category);



?>