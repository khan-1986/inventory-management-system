
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
		<div class="col-lg-10 dashboard">
			<div class="row">
				<div class="col-sm-3">
					<div class="result1">
						<h3>Total Orders</h3>
						<?php $q = "SELECT * FROM `orders`";
						$qu = mysqli_query($con,$q);
						$num_rows = mysqli_num_rows($qu);?>
                        <h4 class="result-count"><?php echo $num_rows; ?></h4>
					</div>
					<div class="result1">
						<h3>Total Sale</h3>
						<?php 
			             $q4 = "SELECT SUM(amount) FROM `orders` WHERE `status` != 'cancel'";
									$qu4 = mysqli_query($con,$q4);
									while($rows4 = mysqli_fetch_array($qu4)){ ?>
			            <h4 class="result-count"><?php echo $rows4['0']; ?></h4>
								<?php }?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="result2">
						<h3>Total Orders Cancel</h3>
						<?php $q1 = "SELECT * FROM `orders` WHERE `status` = 'cancel'";
						$qu1 = mysqli_query($con,$q1);
						$num_rows1 = mysqli_num_rows($qu1);?>
                        <h4 class="result-count"><?php echo $num_rows1; ?></h4>
					</div>
					<div class="result2">
						<h3>Total Sale Return</h3>
						<?php 
			             $q5 = "SELECT SUM(amount) FROM `orders` WHERE `status` = 'cancel'";
									$qu5 = mysqli_query($con,$q5);
									while($rows5 = mysqli_fetch_array($qu5)){ ?>
			            <h4 class="result-count"><?php echo $rows5['0']; ?></h4>
								<?php }?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="result3">
						<h3>Total Orders Active</h3>
						<?php $q2 = "SELECT * FROM `orders` WHERE `status` = 'active'";
						$qu2 = mysqli_query($con,$q2);
						$num_rows2 = mysqli_num_rows($qu2);?>
                        <h4 class="result-count"><?php echo $num_rows2; ?></h4>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="result4">
						<h3>Total Orders Active</h3>
						<?php $q3 = "SELECT * FROM `orders` WHERE `status` = 'delivered'";
						$qu3 = mysqli_query($con,$q3);
						$num_rows3 = mysqli_num_rows($qu3);?>
                        <h4 class="result-count"><?php echo $num_rows3; ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>