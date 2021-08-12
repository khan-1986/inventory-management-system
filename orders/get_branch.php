<?php
include('../inc/db.php');
$q = intval($_GET['q']);

$sql="SELECT * FROM `branches` WHERE branch_id = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
	$address = $row['branch_address'];
}
$sqlq = "SELECT MAX(order_id) AS max_order FROM orders";
$res = mysqli_query($con,$sqlq);
$ro = mysqli_fetch_array($res);
$c = '1';
$ab = $ro['max_order'] + $c;
$a=array("a"=>"red");
array_push($a,$address,$ab);
echo json_encode($a);
?>