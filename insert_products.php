<?php 
session_start();
include 'inc/db.php';
$a = $_POST['productname'];
$b = $_POST['productcode'];
$c = $_POST['service'];
$d = $_POST['regularprice'];
$e = $_POST['urgentprice'];
$f = $_POST['rdeliverytime'];
$g = $_POST['udeliverytime'];
$q = "INSERT INTO `products`(`product_name`, `product_code`, `service`, `regular_price`, `urgent_price`, `regular_delivery_time`, `urgent_delivery_time`) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['prodinsert'] = 'Product Inserted';
header("Location: products.php");
}
 ?>
