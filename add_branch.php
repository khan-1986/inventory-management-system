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
			<h1>Add Branch</h1>
			
					<div class="row">
						<div class="col-lg-4">
							<?php 
			if(isset($_SESSION['brinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['brinsert']; ?></h2>
			<?php } ?>
			        <form class="form-horizontal" role="form" method="post" action="insert_branch.php">
							<div class="form-group">
                               <label for="inputEmail3" class="">Branch Name</label>
			                   <input type="text" class="form-control" name="branchname" placeholder="Branch Name">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Branch Address</label>
			                        <input type="text" class="form-control" name="branchaddre" placeholder="Branch Address">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Branch Manager</label>
			                        <input type="text" class="form-control" name="branchman" placeholder="Branch Manager">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Assistant Manager</label>
			                        <input type="text" class="form-control" name="assismanager" placeholder="Assistant Manager">
                    		</div>
							<button class="btn btn-primary">Add</button>
							</form>
						</div>
						<div class="col-lg-6">
							<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Branch Name</th>
							        <th>Branch Address</th>
							        <th>Manager</th>
							        <th>Assistant Manager</th>
							        <th>Edit</th>
							        <th>Delete</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
									$q = "SELECT * FROM `branches`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							      <tr>
							        <td><?php echo $rows['branch_name']; ?></td>
							        <td><?php echo $rows['branch_address']; ?></td>
							        <td><?php echo $rows['branch_manager']; ?></td>
							        <td><?php echo $rows['assist_manager']; ?></td>
							        <td><a href="update_branch.php?tid=<?php echo $rows['branch_id'];?>"><i class="glyphicon glyphicon-edit"></i></a></td>
							        <td><a href="delete_branch.php?etid=<?php echo $rows['branch_id'];?>"><i class="glyphicon glyphicon-trash"></i></a></td>
							      </tr>
							      <?php } ?>
							    </tbody>
							  </table>
						</div>
					</div>
			
		</div>
	</div>
</div>

</body>
</html>