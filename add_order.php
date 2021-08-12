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
			<h1>Create Order</h1>
			<form class="form-horizontal" role="form" method="post" action="insert_order.php">
				<?php 
			if(isset($_SESSION['orderinsert'])){ ?>
			<h2 style="background-color: #c1b2b2;"><?php echo $_SESSION['orderinsert']; ?></h2>
			<?php } ?>
					<div class="row">
						<div class="col-sm-4">
                               <label for="inputEmail3" class="">Customer Name</label>
			                   <input type="text" class="form-control" name="customername" placeholder="Full Name" required>
						</div>
						<div class="col-sm-4">
							  <label for="inputEmail3" class="">Customer Address</label>
			                        <input type="text" class="form-control" name="customeraddress" placeholder="Address" required>
						</div>
						<div class="col-sm-4">
							<label for="inputEmail3" class="">Phone No</label>
			                        <input type="text" class="form-control" name="phoneno" placeholder="Phone No" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label for="inputEmail3" class="">Order Date</label>
			                   <input type="text" class="form-control" id="ord-date" name="orderdate" value="<?php echo date('Y-m-d'); ?>" readonly>
						</div>
						<div class="col-sm-6">
							<label for="inputEmail3" class="">Delivery Date</label>
			                        <input type="text" class="form-control" id="deli-date" name="deliverydate" placeholder="Delivery Date" readonly value required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label for="sel1">Branch Name</label>
							  <select class="form-control" id="bra-name" name="branchname" required>
							  	<option value="0">Select Branch</option>
							  	<?php 
									$q = "SELECT * FROM `branches`";
									$qu = mysqli_query($con,$q);
									while($rows = mysqli_fetch_array($qu)){
									?>
							    <option id="<?php echo $rows['branch_id']; ?>" value="<?php echo $rows['branch_name']; ?>"><?php echo $rows['branch_name']; ?></option>
							    <?php } ?>
							  </select>
						</div>
						<div class="col-sm-4">
							<label for="sel1">Branch Address</label>
							  <input type="text" name="branchaddress" id="bra-address" class="form-control" readonly required value>
						</div>
						<div class="col-sm-4">
							<label>Order Number</label>
							<input type="text" name="ordernumber" id="ord-number" class="form-control" readonly required value>
						</div>
					</div>
					<h1 style="text-align: center;">Search Items</h1>
					<div class="row">
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
							<label>Type Item Code</label>
							<input type="text" name="itemcode" id="item-code" class="form-control" value>
							<div class="itemslist" id="items-list"></div>
						</div>
						<div class="col-sm-4"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="return-product" id="add-product" required></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label>Tax %</label>
							<input type="text" name="tax" id="item-tax" class="form-control" required>
						</div>
						<div class="col-sm-6">
							<label>Discount Amount %</label>
							<input type="text" name="item-discount" id="it-discount" class="form-control" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>Quantity</label>
							<input type="text" name="quantity" class="form-control" id="item-quantity" required readonly value>
						</div>
						<div class="col-sm-4">
							<label>Sub Total</label>
							<input type="text" name="subtotal" class="form-control" id="sub-total" required readonly value>
						</div>
						<div class="col-sm-4">
							<label>Total</label>
							<input type="text" name="orderamount" class="form-control" id="total-amount" required readonly value>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label>Advance Payment</label>
							<input type="text" name="advpayment" class="form-control" value="0" id="adv-pay" required>
						</div>
						<div class="col-sm-6">
							<label>Amount Due</label>
							<input type="text" name="amountdue" class="form-control" id="amount-due"  value="0" required>
						</div>
					</div>
					<div class="button">
							<button class="btn btn-primary">Add Order</button>
							</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
<script type="text/javascript">
	$(document).on('change', '#bra-name', function(){
		var str = $(this).find('option:selected').attr('id');
		//console.log(t1);
	
	
    	var xhttp;  
  if (str == "") {
    document.getElementById("bra-address").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	
    	var address = this.responseText;
    	console.log(address);

    	var myJSON = JSON.parse(address);
    	//console.log(myJSON[1]);
    	//console.log(myJSON[5]);
      //document.getElementById("bra-address").innerHTML = this.responseText;
      $("#bra-address").val(myJSON[0]);
      $("#ord-number").val(myJSON[1]);
    }
  };
  xhttp.open("GET", "orders/get_branch.php?q="+str, true);
  xhttp.send();
    });

 $("#item-code").on("input", function(){
 	var str1 = $(this).val();
 	//console.log(code);
  if (str1 == "") {
    document.getElementById("items-list").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("items-list").innerHTML = this.responseText;
        console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","orders/getproducts.php?q="+str1,true);
    xmlhttp.send();
  }
 
 });
 $(document).on('click', '#items-list .product-list .lable', function() {
   
   	var stri = $(this).attr('id');
var str2 = $(this).attr('value');

  console.log(str2);
  if (str2 == "") {
    document.getElementById("add-product").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("add-product").innerHTML = this.responseText;
        console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","orders/get_product_data.php?q="+str2+"&&id="+stri,true);
    xmlhttp.send();
  }
 });
 
 $(document).on('click', '#add-product table tbody tr td a', function() {
var classname = $(this).attr('class');
var id = $(this).attr('id');
//console.log(classname);
//console.log(id);
if(classname == 'add'){
	var ch = $('#item-quantity').val();
	var one = '1';
	var val = (+ch) + (+one);
	console.log('add');
	console.log(val);
	$('#item-quantity').val(val);
}else{
	var ch = $('#item-quantity').val();
	var one = '1';
	var val = ch - one;
	console.log('remove');
	console.log(val);
	$('#item-quantity').val(val);
}
});

$(document).on('change', '.urgency', function() {
	var service = $('#serviceid').val();
	var urgency = $(this).val();
	var id = $(this).attr('id');
	//alert(id);

	var xhttp;  
  if (id == "") {
    document.getElementById("sub-total").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	
    	var address = this.responseText;
    	//console.log(address);

    	var myJSON = JSON.parse(address);
    	console.log(myJSON);
    	console.log(myJSON[0]);
    	console.log(myJSON[1]);
    	var quantity = $("#item-quantity").val();
    	var total_p = quantity * myJSON[0]; 
    	$("#actual-amount").val(total_p);
    	$("#sub-total").val(total_p);
    	$("#total-amount").val(total_p);
    	$("#price1").html(total_p);
    	$("#deli-date").val(myJSON[1]);
      //document.getElementById("bra-address").innerHTML = this.responseText;
      //$("#bra-address").val(myJSON[0]);
      //$("#ord-number").val(myJSON[1]);
    }
  };
  xhttp.open("GET", "orders/get_price.php?q="+id+"&&ur="+urgency, true);
  xhttp.send();


});

// add extra charges
$(document).on('keyup', '#extra-ch', function() {
	var exch = $(this).val();
	var current = $('#actual-amount').val();
	var addextra = (+exch) + (+current);
	console.log(addextra);
	$("#sub-total").val(addextra);
    	$("#total-amount").val(addextra);
    	$("#price1").html(addextra);
    	
	
});
$(document).on('keyup', '#item-quantity', function() {
	var exch = $(this).val();
	var current = $('#total-amount').val();
	var addextraa = (exch) * (current);
    	$("#total-amount").val(addextraa);
    
    	
	
});
// add tax
$(document).on('keyup', '#item-tax', function() {
	var current = $("#price1").html();
	var percent = $(this).val();
   //var price = $("#sub-total").val();
   var di = percent / current ;
   var topercent = di * '100';
   var percentplus = (+topercent) + (+current);
   //console.log(percentplus);
   $("#total-amount").val(percentplus);
   
}); 


// add discount

$(document).on('keyup', '#it-discount', function() {
	var dis_amount = $(this).val();
	var amount = $('#total-amount').val();
	var after_dis = amount - dis_amount;
	//console.log(after_dis);
	$("#total-amount").val(after_dis);
});

$(document).on('keyup', '#adv-pay', function() {
	var due_amount = $(this).val();
	var tamount = $('#total-amount').val();
	var after_due = tamount - due_amount;
	//console.log(after_dis);
	$("#amount-due").val(after_due);
});
 
</script>