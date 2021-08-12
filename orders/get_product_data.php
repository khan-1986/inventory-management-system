<html>
 <head>
 <style type="text/css">
	.add, .remove {
	font-size: 20px;
    padding: 5px;
    background-color: green;
    color: white;
}
.add:hover, .remove:hover {
    color: white;
    cursor: pointer;
}
</style>
<script>
 	$(document).ready(function(){
 		
 	});
 </script>
 </head>
 <body>

<?php 
include('../inc/db.php');
$q = intval($_GET['q']);
$id = intval($_GET['id']);
$sql="SELECT * FROM `products` WHERE id = '".$id."' AND product_code = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
$a = 'table table-bordered';
$b = 'glyphicon glyphicon-plus';
$add = 'add';
$remove = 'remove';
$form = 'form-control';
$sid = 'serviceid';
$service = 'service';
$sdelivary = 'delivary-id';
$delivary = 'delivary';
$a0 = '0';
$laundry = 'laundary';
$manding = 'manding';
$stitch = 'stitch';
$alter = 'alter';
$bottom_set = 'bottom_set';
$text = 'text';
$status = 'status';
$pakaging = 'pakaging';
$extrach = 'extrach';
$service_form = 'service-form';
$urgency = 'urgency';
$price1 = 'price1';
	echo "<table class=".$a.">
	<thead>
	<tr>
		<th>Name</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td id=".$row['id'].">". $row['product_name'] ."</td>
		<td ><a id=".$row['id']." class=".$add.">+</a></td>
		<td ><a id=".$row['id']." class=".$remove.">-</a></td>
	</tr>
</tbody>
</table>
<table class=".$a." id=".$service_form.">
	<thead>
		<tr>
			<th>Service</th>
			<th>Delivary</th>
			<th>Status</th>
			<th>Pakaging</th>
			<th>Extra Charges</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<select class=".$form." id=".$sid." name=".$service.">
							  	<option value=".$a0.">Select Service</option>
							  	<option value=".$laundry.">Laundry</option>
							  	<option value=".$manding.">Manding</option>
							  	<option value=".$stitch.">Stitch</option>
							  	<option value=".$alter.">Alter</option>
							  	<option value=".$bottom_set.">New Bottom Setting</option>
			</select>
			</td>
			<td>
				<select class=".$urgency." id=".$row['id']." name=".$delivary.">
					<option>Select</option>
					<option>Regular</option>
					<option>Urgent</option>
				</select>
			</td>
			<td>
				<input type=".$text." name=".$status." class=".$form.">
			</td>
			<td>
				<input type=".$text." name=".$pakaging." class=".$form.">
			</td>
			<td>
				<input type=".$text." name=".$extrach." class=".$form.">
			</td>
			<td>
				<span id=".$price1.">TK</span>
			</td>
		</tr>
	</tbody>
</table>";
}
 ?>
 </body>
 </html>