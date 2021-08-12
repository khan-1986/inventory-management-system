

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
$a = $_POST['branchname'];
$b = $_POST['branchaddre'];
$c = $_POST['branchman'];
$d = $_POST['assismanager'];
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['tid']);
$que = "UPDATE `branches` SET `branch_name`='$a',`branch_address`='$b',`branch_manager`='$c',`assist_manager`='$d' WHERE `branch_id`='$id'";
$ch = mysqli_query($con , $que);
if($ch == '1'){
$_SESSION['brinsert'] = 'Branch Updated';
header("Location: add_branch.php");
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
			<h1>Edit Branch</h1>
			
					<div class="row">
						<div class="col-lg-6">
							<?php
								$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['tid']);
								$_SESSION['ubid'] = $id;
								$q = "SELECT * FROM `branches` where branch_id = '$id'";
								$qu = mysqli_query($con, $q);
								while($rows = mysqli_fetch_array($qu)){
								?>
			        <form class="form-horizontal" role="form" method="post" action="">
							<div class="form-group">
                               <label for="inputEmail3" class="">Branch Name</label>
			                   <input type="text" class="form-control" name="branchname" value="<?php echo $rows['branch_name']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Branch Address</label>
			                        <input type="text" class="form-control" name="branchaddre" value="<?php echo $rows['branch_address']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Branch Manager</label>
			                        <input type="text" class="form-control" name="branchman" value="<?php echo $rows['branch_manager']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Assistant Manager</label>
			                        <input type="text" class="form-control" name="assismanager" value="<?php echo $rows['assist_manager']; ?>">
                    		</div>
							<button class="btn btn-primary" name="SubmitButton" type="submit">Update</button>
							</form>
							<?php } ?>
						</div>
						
					</div>
			
		</div>
	</div>
</div>

</body>
</html>
