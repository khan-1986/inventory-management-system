<?php
session_start();
if(!isset($_SESSION['$e'])){
	header('location: ../login/Login.php');
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="inc/custom.css">
<?php include 'db.php'; ?>
			<div class="container">
			<div class="row">
			<div class="col-sm-8">
				<h2> Management System</h2>
								</div>
				<div class="col-sm-4">
					
				</div>
			</div>
		</div>
		<hr>
        