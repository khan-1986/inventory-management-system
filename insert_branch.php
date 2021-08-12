<?php
session_start();
include 'inc/db.php';
$a = $_POST['branchname'];
$b = $_POST['branchaddre'];
$c = $_POST['branchman'];
$d = $_POST['assismanager'];
$q = "INSERT INTO `branches`(`branch_name`, `branch_address`, `branch_manager`, `assist_manager`) VALUES ('$a','$b','$c','$d')";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['brinsert'] = 'Branch Inserted';
header("Location: add_branch.php");
}
?>