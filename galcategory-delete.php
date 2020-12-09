<?php
include('config.php');
$galcategory = new Database;
$del = $_GET['delete'];

$sql = $galcategory->galcatdel($del);
if($sql){
	header('location:gallerycategory.php?del=1');
}
else{
	header('location:gallerycategory.php?error=1');
}

?>