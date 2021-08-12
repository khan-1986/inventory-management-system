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
$a = $_POST['factoryaddre'];
$b = $_POST['factoryman'];
$c = $_POST['assismanager'];
$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['tid']);
$que = "UPDATE `factory` SET `factory_address`='$a',`factory_manager`='$b',`assistant_manager`='$c' WHERE `id` = '$id'";
$ch = mysqli_query($con , $que);
if($ch == '1'){
$_SESSION['facinsert'] = 'Factory Updated';
header("Location: add_factory.php");
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
			<h1>Edit Factory</h1>
			
					<div class="row">
						<div class="col-lg-6">
						<?php
								$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['tid']);
								$_SESSION['ubid'] = $id;
								$q = "SELECT * FROM `factory` WHERE id = '$id'";
								$qu = mysqli_query($con, $q);
								while($rows = mysqli_fetch_array($qu)){
								?>
			        <form class="form-horizontal" role="form" method="post" action="">
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Factory Address</label>
			                        <input type="text" class="form-control" name="factoryaddre" value="<?php echo $rows['factory_address']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Factory Manager</label>
			                        <input type="text" class="form-control" name="factoryman" value="<?php echo $rows['factory_manager']; ?>">
                    		</div>
                    		<div class="form-group">
                               <label for="inputEmail3" class="">Assistant Manager</label>
			                        <input type="text" class="form-control" name="assismanager" value="<?php echo $rows['assistant_manager']; ?>">
                    		</div>
							<button class="btn btn-primary" type="submit" name="SubmitButton">Update</button>
							</form>
							<?php } ?>
						</div>
					</div>
			
		</div>
	</div>
</div>

</body>
</html>