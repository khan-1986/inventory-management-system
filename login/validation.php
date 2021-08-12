<?php
session_start();
include('../inc/db.php');
$a = $_POST['id'];
$b = $_POST['pass'];
$e = md5($b);
$q = "SELECT * FROM `user` WHERE `username` = '$a' && `password` = '$e'";
$qu = mysqli_query($con, $q);
$num = mysqli_num_rows($qu);
if($num == 1){
$_SESSION['login'] = $e;
header('location: ../dashboard.php');
}else{
header('location: ');
}
?>