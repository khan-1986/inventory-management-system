<?php
session_start();
include 'inc/db.php';
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['dpid']);
$q = "DELETE FROM `orders` WHERE `order_id` = '$id'";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['orderinsert'] = 'Order Deleted';
header("Location: all_orders.php");
}

?>