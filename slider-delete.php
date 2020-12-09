<?php
include('config.php');
$services = new Database;
$del = $_GET['delete'];

$sql = $services->sliderdel($del);
if($sql){
	header('location:slider-list.php?del=1');
}
else{
	header('location:slider-list.php?error=1');
}

?>