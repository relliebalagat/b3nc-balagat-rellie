<?php

session_start();

$page_title = 'Order';

include 'partials/header.php';

if(isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
}

// if(empty($_SESSION['cart'])) {
// 	header('Location: home.php');
// }

$total_order_price = 0;
$total_quantity = 0;
foreach ($_SESSION['cart'] as $key => $value) {

	$subquantity = (int)$_SESSION['cart'][$key]['quantity'];
	$total_quantity += $subquantity;
	$totalperitem = floatval($_SESSION['cart'][$key]['price']) * $subquantity;
	$id = (int)$_SESSION['cart'][$key]['id'];
	$total_order_price += $totalperitem;
}


?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="order-details">
					<h2 class="text-center">Order Details</h2>
						<form id="registrationForm" action="assets/checkout.php" method="POST">
							
							<input type="hidden" name="totalorderprice" class="form-control" id="" value="<?php echo $total_order_price; ?>">
							
							<label>Contact Person</label>
							<input type="text" name="contactperson" class="form-control" id="" value="<?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>">

							<label>Email</label>
							<input type="email" name="email_add" class="form-control" id="" value="<?php echo $_SESSION['email']; ?>" disabled>

							<label>Delivery Address</label>
							<input type="text" name="deliveryadd" class="form-control" id="">

							<label>Country</label>
							<input type="text" name="country" class="form-control" id="">

							<label>ZIP Code</label>
							<input type="number" name="zip_code" class="form-control" id="">

							<label>Mobile Number</label>
							<input type="number" name="mobile_number" class="form-control" id="">

							<label>Telephone Number</label>
							<input type="number" name="tel_number" class="form-control" id="">
							
							<input type="submit" name="submit" class="btn order-btn" id="submit" value="Checkout">							
						</form>
				</div> <!-- ./order-details -->			
			</div>	<!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->









<?php

include 'partials/footer.php';

include 'partials/foot.php';

?>