<?php
session_start();
include 'inc/db.php';
$a = $_POST['factoryaddre'];
$b = $_POST['factoryman'];
$c = $_POST['assismanager'];
$q = "INSERT INTO `factory`(`factory_address`, `factory_manager`, `assistant_manager`) VALUES ('$a','$b','$c')";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['facinsert'] = 'Factory Inserted';
header("Location: add_factory.php");
}
?>