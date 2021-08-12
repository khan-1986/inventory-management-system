<?php
session_start();
include 'inc/db.php';
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['etid']);
$q = "DELETE FROM `branches` WHERE `branch_id` = '$id'";
$ch = mysqli_query($con , $q);
if($ch == '1'){
$_SESSION['brinsert'] = 'Branch Deleted';
header("Location: add_branch.php");
}

?>