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
		<div class="col-lg-5">
			<h1 style="text-align: center;">Daily Income</h1>
			<?php 
			if(isset($_SESSION['orderinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php //echo $_SESSION['orderinsert']; ?></h2>
			<?php } ?>
			<div class="table-responsive">
			<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Branch Name</th>
							        <th>Order Date</th>
							        <th>Sale</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
									$q = "SELECT * FROM `orders` WHERE `status` != 'cancel'";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							      <tr>
							      	<td><?php echo $rows['branch']; ?></td>
							        <td><?php echo $rows['order_date']; ?></td>
							        <td><?php echo $rows['amount']; ?></td>
							      </tr>
							      <?php } ?>
							    </tbody>
							  </table>
							  </div>
		</div>
		<div class="col-lg-5">
			<h1 style="text-align: center;">Expense</h1>
			<div class="table-responsive">
			<table class="table table-bordered">
							    <thead>
							      <tr>
							      	<th>Branch Name</th>
							        <th>Order Date</th>
							        <th>Amount</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
									$q = "SELECT * FROM `orders` WHERE `status` = 'cancel'";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							      <tr>
							      	<td><?php echo $rows['branch']; ?></td>
							        <td><?php echo $rows['order_date']; ?></td>
							        <td><?php echo $rows['amount']; ?></td>
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