<?php 
session_start();
include '../inc/db.php';
$a = $_POST['fullname'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['role'];
$f = $_POST['branch'];
$e = md5($c);
$q = "INSERT INTO `user`(`fullName`, `username`, `password`, `status`, `branch`) VALUES ('$a','$b','$e','$d', '$f')";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['uinsert'] = 'User Inserted';
header("Location: add_user.php");
}
 ?>
