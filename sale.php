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
			<h1 style="text-align: center;">Sale</h1>

			<?php 
			$q1 = "SELECT SUM(amount) FROM `orders` WHERE `status` != 'cancel'";
									$qu1 = mysqli_query($con,$q1);
									while($rows1 = mysqli_fetch_array($qu1)){ ?>
			<h2>Total Sale: <?php echo $rows1['0']; ?></h2>
								<?php }
			?>
			<div class="table-responsive">
			<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Branch Name</th>
							        <th>Order Month</th>
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
							      	<?php $date = $rows['order_date']; ?>
							        <td><?php echo date('F', strtotime($date)); ?></td>
							        <td><?php echo $rows['amount']; ?></td>
							      </tr>
							      <?php } ?>
							    </tbody>
							  </table>
							  </div>
		</div>
		<div class="col-lg-5">
			<h1 style="text-align: center;">Sale Return</h1>
			<?php 
			$q1 = "SELECT SUM(amount) FROM `orders` WHERE `status` = 'cancel'";
									$qu1 = mysqli_query($con,$q1);
									while($rows1 = mysqli_fetch_array($qu1)){ ?>
			<h2>Sale Return: <?php echo $rows1['0']; ?></h2>
								<?php }
			?>
			<div class="table-responsive">
			<table class="table table-bordered">
							    <thead>
							      <tr>
							      	<th>Branch Name</th>
							        <th>Order Month</th>
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
							        <?php $date = $rows['order_date']; ?>
							        <td><?php echo date('F', strtotime($date)); ?></td>
							        <td><?php echo $rows['amount']; ?></td>
							      </tr>
							      <?php  } ?>
							    </tbody>
							  </table>
							  </div>
		</div>
	</div>
</div>

</body>
</html>