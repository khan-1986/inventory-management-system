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
			<h1>Add Factory</h1>
			
					<div class="row">
						<div class="col-lg-4">
							<?php 
			if(isset($_SESSION['facinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['facinsert']; ?></h2>
			<?php } ?>
			        <form class="form-horizontal" role="form" method="post" action="insert_factory.php">
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Factory Address</label>
			                        <input type="text" class="form-control" name="factoryaddre" placeholder="Branch Address">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Factory Manager</label>
			                        <input type="text" class="form-control" name="factoryman" placeholder="Branch Manager">
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
							        <th>Branch Address</th>
							        <th>Manager</th>
							        <th>Assistant Manager</th>
							        <th>Edit</th>
							        <th>Delete</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
									$q = "SELECT * FROM `factory`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							      <tr>
							        <td><?php echo $rows['factory_address']; ?></td>
							        <td><?php echo $rows['factory_manager']; ?></td>
							        <td><?php echo $rows['assistant_manager']; ?></td>
							        <td><a href="update_factory.php?tid=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-edit"></i></a></td>
							        <td><a href="delete_factory.php?etid=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-trash"></i></a></td>
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