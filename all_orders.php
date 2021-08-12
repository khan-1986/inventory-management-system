<!DOCTYPE html>
<html>
<head>
	<title>Management System</title>
	<?php 
include 'inc/header.php';  
?>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
			<?php include 'sidenav.php'; ?>
		</div>
		<div class="col-lg-10">
			<h1 style="text-align: center;">Orders</h1>
			<?php 
			if(isset($_SESSION['orderinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['orderinsert']; ?></h2>
			<?php } ?>
			<div class="table-responsive">
			<table class="table table-bordered">
							    <thead>
							      <tr>
							      	<th>Order ID</th>
							        <th>Customer Name</th>
							        <th>Customer Address</th>
							        <th>Phone No</th>
							        <th>Order type</th>
							        <th>Order Date</th>
							        <th>Delivery Date</th>
							        <th>Total Amount</th>
							        <th>Advance Payment</th>
							        <th>Payment Due</th>
							        <th>Branch Name</th>
							        <th>Branch Address</th>
							        <th>Status</th>
							        <th>Print Invoice</th>
							        <th>Edit</th>
							        <th>Delete</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
									$q = "SELECT * FROM `orders`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							      <tr>
							        <td><?php echo $rows['order_id']; ?></td>
							        <td><?php echo $rows['customer_name']; ?></td>
							        <td><?php echo $rows['customer_address']; ?></td>
							        <td><?php echo $rows['phone_no']; ?></td>
							        <td><?php echo $rows['order_type']; ?></td>
							        <td><?php echo $rows['order_date']; ?></td>
							        <td><?php echo $rows['delivery_date']; ?></td>
							        <td><?php echo $rows['total']; ?></td>
							        <td><?php echo $rows['advance_payment']; ?></td>
							        <td><?php echo $rows['amount_due']; ?></td>
							        <td><?php echo $rows['branch']; ?></td>
							        <td><?php echo $rows['branch_address']; ?></td>
							        <td><?php echo $rows['status']; ?></td>
							        
							        <td><a href="invoice.php?pid=<?php echo $rows['order_id'];?>"><i class="glyphicon glyphicon-print"></i></a></td>
							        <td><a href="update_order.php?epid=<?php echo $rows['order_id'];?>"><i class="glyphicon glyphicon-edit"></i></a></td>
							        <td><a href="order_delete.php?dpid=<?php echo $rows['order_id'];?>"><i class="glyphicon glyphicon-trash"></i></a></td>
							      </tr>
							      <?php } ?>
							    </tbody>
							  </table>
							  </div>
		</div>
	</div>
</div>

</body>
</html>