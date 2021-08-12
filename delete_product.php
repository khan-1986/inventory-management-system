<?php
session_start();
include 'inc/db.php';
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['dpid']);
$q = "DELETE FROM `products` WHERE `id` = '$id'";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['produpdated'] = 'Product Deleted';
header("Location: product_stock.php");
}

?>