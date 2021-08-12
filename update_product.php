<!DOCTYPE html>
<html>
<head>
	<title>Management System</title>
	<?php 
include 'inc/header.php';  
?>
</head>
<?php
if(isset($_POST['SubmitButton'])){
$a = $_POST['productname'];
$b = $_POST['productcode'];
$c = $_POST['service'];
$d = $_POST['regularprice'];
$e = $_POST['urgentprice'];
$f = $_POST['rdeliverytime'];
$g = $_POST['udeliverytime'];
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['epid']);
$que = "UPDATE `products` SET `product_name`='$a',`product_code`='$b',`service`='$c',`regular_price`='$d',`urgent_price`='$e',`regular_delivery_time`='$f',`urgent_delivery_time`='$g' WHERE `id` = '$id'";
$ch = mysqli_query($con , $que);
if($ch == '1'){
$_SESSION['produpdated'] = 'Product Updated';
header("Location: product_stock.php");
}
}

 ?>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
			<?php include 'sidenav.php'; ?>
		</div>
		<div class="col-lg-10">
			<h1>Update Products</h1>
			<?php
								$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['epid']);
								//$_SESSION['ubid'] = $id;
								$q = "SELECT * FROM `products` WHERE id = '$id'";
								$qu = mysqli_query($con, $q);
								while($rows = mysqli_fetch_array($qu)){
								?>
			<form class="form-horizontal" role="form" method="post" action="">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
                               <label for="inputEmail3" class="">Product Name</label>
			                   <input type="text" class="form-control" name="productname" value="<?php echo $rows['product_name']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Product Code</label>
			                        <input type="text" class="form-control" name="productcode" value="<?php echo $rows['product_code']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Service</label>
			                        <input type="text" class="form-control" name="service" value="<?php echo $rows['service']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Regular Price</label>
			                   <input type="text" class="form-control" name="regularprice" value="<?php echo $rows['regular_price']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Urgent Price</label>
			                        <input type="text" class="form-control" name="urgentprice" value="<?php echo $rows['urgent_price']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Regular Delivery Time</label>
			                        <input type="text" class="form-control" name="rdeliverytime" value="<?php echo $rows['regular_delivery_time']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Urgent Delivery Time</label>
			                        <input type="text" class="form-control" name="udeliverytime" value="<?php echo $rows['urgent_delivery_time']; ?>">
                    		</div>
							<button class="btn btn-primary" type="submit" name="SubmitButton">Update</button>
						</div>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>
</div>

</body>
</html>