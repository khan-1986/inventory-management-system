<?php
session_start();
include 'inc/db.php';
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['etid']);
$q = "DELETE FROM `factory` WHERE `id` = '$id'";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['facinsert'] = 'Factory Deleted';
header("Location: add_factory.php");
}

?>