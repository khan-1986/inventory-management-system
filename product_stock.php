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
			<h1 style="text-align: center;">Products</h1>
			<?php 
			if(isset($_SESSION['produpdated'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['produpdated']; ?></h2>
			<?php } ?>
			<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Product Name</th>
							        <th>Product Code</th>
							        <th>Service</th>
							        <th>Regular Price</th>
							        <th>Urgent Price</th>
							        <th>Regular Delivery Time</th>
							        <th>Urgent Delivery Time</th>
							        <th>Edit</th>
							        <th>Delete</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
									$q = "SELECT * FROM `products`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							      <tr>
							        <td><?php echo $rows['product_name']; ?></td>
							        <td><?php echo $rows['product_code']; ?></td>
							        <td><?php echo $rows['service']; ?></td>
							        <td><?php echo $rows['regular_price']; ?></td>
							        <td><?php echo $rows['urgent_price']; ?></td>
							        <td><?php echo $rows['regular_delivery_time']; ?></td>
							        <td><?php echo $rows['urgent_delivery_time']; ?></td>
							        <td><a href="update_product.php?epid=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-edit"></i></a></td>
							        <td><a href="delete_product.php?dpid=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-trash"></i></a></td>
							      </tr>
							      <?php } ?>
							    </tbody>
							  </table>
		</div>
	</div>
</div>

</body>
</html>