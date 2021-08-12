<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location: http://localhost/Management_System/login/Login.php');
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="inc/custom.css">
<?php include 'db.php'; ?>
			<div class="container-fluid" style="background-color: currentcolor; padding-bottom: 3%;">
			<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-8">
				<h2 style="color: white;">calcatta dry cleaners</h2>
								</div>
				<div class="col-sm-4">
					
				</div>
			</div>
		</div>
        