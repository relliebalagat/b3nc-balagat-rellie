<?php

session_start();

$page_title = 'Order';

include 'partials/header.php';

if(isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
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
				<div class="clearfix">
					<div class="order-content">
						<h2 class="text-center">Orders</h2>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<td>Item</td>
										<td>Quantity</td>
										<td>Price</td>
										<td>Total</td>
									</tr>
								</thead>

								<?php
								$total_order_price = 0;
								$total_quantity = 0;
								foreach ($_SESSION['cart'] as $key => $value) {
							
									$subquantity = (int)$_SESSION['cart'][$key]['quantity'];
									$total_quantity += $subquantity;
									$totalperitem = floatval($_SESSION['cart'][$key]['price']) * $subquantity;
									$id = (int)$_SESSION['cart'][$key]['id'];
									$total_order_price += $totalperitem;

									echo '
										<tr>
											<td class="left">'.$_SESSION['cart'][$key]['title'].'</td>
											<td class="text-center">'.$subquantity.'</td>
											<td class="right">'.number_format($_SESSION['cart'][$key]['price'], 2).'</td>
											<td class="right">'.number_format($totalperitem, 2).'</td>
										</tr>
									';
								}

								?>

									<tr class="price">
										<td class="left">Total</td>
										<td><?php echo $total_quantity; ?></td>
										<td></td>
										<td class="right"><?php echo number_format($total_order_price, 2); ?></td>
									</tr>
							</table>
						</div> <!-- ./table-respons -->
					</div> 	<!-- ./order-content -->

					<div class="order-details">
						<h2 class="text-center">Order Details</h2>
						
							<form id="registrationForm" action="assets/checkout.php" method="POST">
								
								<input type="hidden" name="totalorderprice" class="form-control" id="" value="<?php echo $total_order_price; ?>">

								<label>Email</label>
								<input type="email" name="tel_number" class="form-control" id="" value="<?php echo $email; ?>" disabled>

								<label>Delivery Address 1</label>
								<input type="text" name="deliveryadd1" class="form-control" id="">

								<label>Delivery Address 2</label>
								<input type="text" name="deliveryadd2" class="form-control" id="">

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
				</div>
				
			</div>	<!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->









<?php

include 'partials/footer.php';

include 'partials/foot.php';

?>