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
			<h1>Add Products</h1>
			<form class="form-horizontal" role="form" method="post" action="insert_products.php">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<?php 
			if(isset($_SESSION['prodinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['prodinsert']; ?></h2>
			<?php } ?>
							<div class="form-group">
                               <label for="inputEmail3" class="">Product Name</label>
			                   <input type="text" class="form-control" name="productname" placeholder="Full Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Product Code</label>
			                        <input type="text" class="form-control" name="productcode" placeholder="User Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Service</label>
			                        <input type="text" class="form-control" name="service" placeholder="Password">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Regular Price</label>
			                   <input type="text" class="form-control" name="regularprice" placeholder="Full Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Urgent Price</label>
			                        <input type="text" class="form-control" name="urgentprice" placeholder="User Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Regular Delivery Time</label>
			                        <input type="text" class="form-control" name="rdeliverytime" placeholder="Password">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Urgent Delivery Time</label>
			                        <input type="text" class="form-control" name="udeliverytime" placeholder="Password">
                    		</div>
							<button class="btn btn-primary">Add</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>