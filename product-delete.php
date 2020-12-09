<?php
include('productcontroller.php');
$product = new Product;
$del = $_GET['delete'];

$sql = $product->productdel($del);
if($sql){
	header('location:product-list.php?del=1');
}
else{
	header('location:product-list.php?error=1');
}

?>