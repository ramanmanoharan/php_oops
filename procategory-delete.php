<?php
include('config.php');
$galcategory = new Database;
$del = $_GET['delete'];

$sql = $galcategory->procatdel($del);
if($sql){
	header('location:productcategory.php?del=1');
}
else{
	header('location:productcategory.php?error=1');
}

?>