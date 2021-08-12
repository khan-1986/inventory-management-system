<?php 
include('../inc/db.php');
$q = intval($_GET['q']);
$type = strval($_GET['ur']);
$sql="SELECT * FROM `products` WHERE id = '$q'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
if($type == 'Regular'){
$price =  $row['regular_price'];
$time1 = $row['regular_delivery_time'];
//$time = preg_replace("/[^0-9]/", "", $time1 );
$date = date('Y-m-d');
$time = date('Y-m-d', strtotime($date.' + '.$time1));
$b=array("a"=>"red");
array_push($b,$price,$time);
echo json_encode($b);
}else{
$price =  $row['urgent_price'];
$time1 = $row['urgent_delivery_time'];
//$time = preg_replace("/[^0-9]/", "", $time1 );
$date = date('Y-m-d');
$time = date('Y-m-d', strtotime($date.' + '.$time1));
$b=array("a"=>"red");
array_push($b,$price,$time);
echo json_encode($b);
}
}

/*
if($type == 'Regular'){
echo $row['regular_price'];
echo $row['regular_delivery_time'];
}else{

}*/

 ?>