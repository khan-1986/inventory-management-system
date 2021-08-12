<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.product-list {
    text-align: center;
    border: 1px solid #cccccc;
    font-size: 20px;
}
span.lable:hover {
    padding: 0px 43%;
    background: #eeeeee;
    cursor: pointer;
}
	</style>
</head>
<body>

<?php
include('../inc/db.php');
$q = intval($_GET['q']);
$sql="SELECT * FROM `products` WHERE product_code = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
	$a = 'lable';
	$b = 'product-list';
	//$func = callData();
//echo "<div class=".$b."><input type=".$a." id=".$row['id']." name=".$row['product_name']." value=".$row['id'].">&nbsp<lable>". $row['product_name'] ."</lable></div>";
	echo "<div class=".$b."><span class=".$a." id=".$row['id']." value=".$row['product_code'].">". $row['product_name'] ."</span></div>";
}
?>
<script type="text/javascript">
	
$( document ).ready(function() {
	//function callData(abc){
 	//alert("abc");
 //}
 
    $("#items-list").on("click", function(){
 	alert('abc');
 });
});

</script>
</body>
</html>