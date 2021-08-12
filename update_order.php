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
$a = $_POST['customername'];
$b = $_POST['customeraddress'];
$c = $_POST['phoneno'];
$d = $_POST['ordertype'];
$e = $_POST['orderdate'];
$f = $_POST['deliverydate'];
$g = $_POST['branchname'];
$h = $_POST['branchaddress'];
$i = $_POST['orderstatus'];
$j = $_POST['orderamount'];
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['epid']);
$q1 = "UPDATE `orders` SET `customer_name`='$a',`customer_address`='$b',`phone_no`='$c',`order_type`='$d',`order_date`='$e',`delivery_date`='$f',`branch`='$g',`branch_address`='$h', `status`='$i', `amount`='$j' WHERE `order_id`= '$id'";
$ch = mysqli_query($con , $q1);
if($ch == '1'){
$_SESSION['orderinsert'] = 'Order Updated';
header("Location: all_orders.php");
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
			<h1>Update Order</h1>
			<?php
								$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['epid']);
								//$_SESSION['ubid'] = $id;
								$q = "SELECT * FROM `orders` WHERE order_id = '$id'";
								$qu = mysqli_query($con, $q);
								while($rows = mysqli_fetch_array($qu)){
								?>
			<form class="form-horizontal" role="form" method="post" action="">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
                               <label for="inputEmail3" class="">Customer Name</label>
			                   <input type="text" class="form-control" name="customername" value="<?php echo $rows['customer_name']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Customer Address</label>
			                        <input type="text" class="form-control" name="customeraddress" value="<?php echo $rows['customer_address']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Phone No</label>
			                        <input type="text" class="form-control" name="phoneno" value="<?php echo $rows['phone_no']; ?>">
                    		</div>
                    		<div class="form-group">
							  <label for="sel1">Order Type</label>
							  <select class="form-control" id="sel12" name="ordertype" value="<?php echo $rows['order_type']; ?>">
							    <option>Urgent</option>
							    <option>Regular</option>
							  </select>
							</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Order Date</label>
			                   <input type="Date" class="form-control" name="orderdate" value="<?php echo $rows['order_date']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Delivery Date</label>
			                        <input type="Date" class="form-control" name="deliverydate" value="<?php echo $rows['delivery_date']; ?>">
                    		</div>
                    		<div class="form-group">
								<label>Amount</label>
							<input type="text" class="form-control" name="orderamount" placeholder="Amount" value="<?php echo $rows['amount']; ?>">
							</div>
                    		<div class="form-group">
							  <label for="sel1">Branch Name</label>
							  <select class="form-control" id="sel12" name="branchname" value="<?php echo $rows['branch']; ?>">
							  	<?php 
									$q = "SELECT * FROM `branches`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							    <option><?php echo $rows['branch_name']; ?></option>
							    <?php } ?>
							  </select>
							</div>
                    		<div class="form-group">
							  <label for="sel1">Branch Address</label>
							  <select class="form-control" id="sel12" name="branchaddress" value="<?php echo $rows['branch_address']; ?>">
							  	<?php 
									$q1 = "SELECT * FROM `branches`";
									$qu1 = mysqli_query($con,$q1);
									while($rows1 = mysqli_fetch_array($qu1)){
									?>
							    <option><?php echo $rows1['branch_address']; ?></option>
							    <?php } ?>
							  </select>
							</div>
							<div class="form-group">
							<label for="">Order Status</label>
							<select class="form-control" name="orderstatus" value="<?php echo $rows['status']; ?>">
								<option>Active</option>
								<option>Delivered</option>
								<option>Cancel</option>
							</select>
							</div>
							
							
							
							<button class="btn btn-primary" type="submit" name="SubmitButton">Update Order</button>
						</div>
					</div>
			</form>
			<?php } ?>
		</div>
	</div>
</div>

</body>
</html>