<?php 
session_start();
include 'inc/db.php';
$order_number = $_POST['ordernumber'];
$a = $_POST['customername'];
$b = $_POST['customeraddress'];
$c = $_POST['phoneno'];

$service = $_POST['service'];
$d = $_POST['delivary'];
$pakaging = $_POST['pakaging'];
$extra_charges = $_POST['extra-ch'];
$price = $_POST['subtotal'];
$tax = $_POST['tax'];
$discount = $_POST['item-discount'];
$quantity = $_POST['quantity'];
$subtotal = $_POST['subtotal'];
$total = $_POST['orderamount'];
$advance = $_POST['advpayment'];
$due = $_POST['amountdue'];

$e = $_POST['orderdate'];
$f = $_POST['deliverydate'];
$g = $_POST['branchname'];
$h = $_POST['branchaddress'];
$i = $_POST['status'];

$q = "INSERT INTO `orders`(`order_id`, `customer_name`, `customer_address`, `phone_no`, `service`, `order_type`, `pakaging`, `extra_charges`, `price`, `tax`, `discount`, `quantity`, `sub_total`, `total`, `advance_payment`, `amount_due`, `order_date`, `delivery_date`, `branch`, `branch_address`, `status`) VALUES ('$order_number','$a','$b','$c','$service','$d','$pakaging','$extra_charges','$price','$tax','$discount','$quantity','$subtotal','$total','$advance','$due','$e','$f','$g','$h','$i')"; 

//$q = "INSERT INTO `orders`(`customer_name`, `customer_address`, `phone_no`, `order_type`, `order_date`, `delivery_date`, `branch`, `branch_address`, `status`, `amount`) VALUES ('$a','$b','$c','$d','$e','$f','$g', '$h', '$i', '$j')";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['orderinsert'] = 'Order Added';
header("Location: add_order.php");
}
 ?>
