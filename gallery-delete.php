<?php
include('gallercontroller.php');
$gallery = new Gallery;
$del = $_GET['delete'];

$sql = $gallery->gallerydel($del);
if($sql){
	header('location:gallery-view.php?del=1');
}
else{
	header('location:gallery-view.php?error=1');
}

?>