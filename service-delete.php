<?php
include('config.php');
$services = new Database;
$del = $_GET['delete'];

$sql = $services->servicedel($del);
if($sql){
	header('location:service-list.php?del=1');
}
else{
	header('location:service-list.php?error=1');
}

?>