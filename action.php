<?php 
include('config.php');
$checklogin = new Database;

$name = $_POST['username'];
$password = $_POST['pwd'];

$check = $checklogin->login($name, $password);




?>