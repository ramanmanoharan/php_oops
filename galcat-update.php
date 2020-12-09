<?php
include('config.php');
$galcategory = new Database;
$categoryname = $_POST['category'];
$catid = $_POST['catid'];




	$categoryupdate = $galcategory->galcatupdate($categoryname, $catid);




 ?>