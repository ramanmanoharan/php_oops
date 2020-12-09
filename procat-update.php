<?php
include('gallery.php');
$procategory = new Database;
$categoryname = $_POST['category'];
$catid = $_POST['catid'];




	$categoryupdate = $procategory->procatupdate($categoryname, $catid);




 ?>