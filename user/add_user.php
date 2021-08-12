<!DOCTYPE html>
<html>
<head>
	<title>Management System</title>
	<?php 
include '../inc/header.php';  
?>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
			<?php include '../sidenav.php'; ?>
		</div>
		<div class="col-lg-10">
			<h1>Add User</h1>
			<form class="form-horizontal" role="form" method="post" action="insert.php">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<?php 
			if(isset($_SESSION['uinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['uinsert']; ?></h2>
			<?php } ?>
							<div class="form-group">
                               <label for="inputEmail3" class="">Full Name</label>
			                   <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">User Name</label>
			                        <input type="text" class="form-control" name="username" placeholder="User Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Password</label>
			                        <input type="password" class="form-control" name="password" placeholder="Password">
                    		</div>
                    		<div class="form-group">
							  <label for="sel1">Role</label>
							  <select class="form-control" id="sel1" name="role">
							    <option>CEO</option>
							    <option>Manager</option>
							    <option>Assistant Manager</option>
							    <option>Staff</option>
							  </select>
							</div>
							<div class="form-group">
							  <label for="sel1">Branch</label>
							  <select class="form-control" id="sel12" name="branch">
							  	<?php 
									$q = "SELECT * FROM `branches`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							    <option><?php echo $rows['branch_name']; ?></option>
							    <?php } ?>
							  </select>
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