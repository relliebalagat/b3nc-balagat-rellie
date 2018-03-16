 <?php

session_start();

$page_title = 'My Cart';

include 'partials/header.php';
require 'mysqli_connect.php';


// remove an item from the cart
if(!empty($_SESSION['cart'])) {
	if(isset($_GET['action']) && isset($_GET['id'])) {
		if($_GET['action'] == 'remove') {
			foreach ($_SESSION['cart'] as $key => $value) {
				if($key == $_GET['id']) {
					unset($_SESSION['cart'][$key]);
				}
				if(empty($_SESSION['cart'])) {
					unset($_SESSION['cart']);
				}
			}
		}
	}
}


if(!empty($_SESSION['cart'])) {
	$total = 0;
	$total_per_item = 0;
	$total_quantity = 0;

	$cart_total_item = count($_SESSION['cart']);
							
	foreach ($_SESSION['cart'] as $key => $value) {
		
		$qty = (int)$_SESSION['cart'][$key]['quantity'];
		$total_quantity += $qty;
		
		$price = floatval($_SESSION['cart'][$key]['price']);
		$totalperitem = $qty * $price;
		$total += $totalperitem;
	}

}

?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="container">
		<div class="row basket">
			<div class="col-lg-12">

				<h2 class="text-center">Your Basket</h2>

				<!-- Basket Details -->
				
					<?php

					if(!empty($_SESSION['cart'])) {
						echo '
						<div class="basket-details">
							<p class="text-center"><i class="fas fa-shopping-basket"></i> You have ' . $total_quantity . ' item for a total of PHP ' . number_format($total, 2) . ' amount in your basket</p>
						</div>
							';
					}
					
					?>

				
				<div class="panel">
					<div class="basket-collections">
						<h4>Shopping basket details</h4>

						<?php


						if (!empty($_SESSION['cart'])) {
						
							// no of items in cart
							
							foreach ($variable as $key) {
								# code...
							}

							foreach ($_SESSION['cart'] as $key => $value) {
								
								$subquantity = (int)$_SESSION['cart'][$key]['quantity'];
								$totalperitem = floatval($_SESSION['cart'][$key]['price']) * $subquantity;
								$id = (int)$_SESSION['cart'][$key]['id'];

								echo '
									<hr>
									<div class="basket-item">
										<div class="img-container">
											<img src="' . $_SESSION['cart'][$key]['image'] . '">
										</div> <!-- ./basket-item -->
										<div class="content">
											<h5>' . $_SESSION['cart'][$key]['title'] . '</h5>
											<p class="price">PHP ' . $_SESSION['cart'][$key]['price'] . '</p>
											<p>'.$_SESSION['cart'][$key]['first_name'] ." " . $_SESSION['cart'][$key]['last_name'] . '</p>
										</div> <!-- ./content -->
										<div class="product-input">
											
												<label>Quantity</label>
												<input type="number" name="quantity" value="' . $_SESSION['cart'][$key]['quantity'] . '">
												<p class="price">PHP ' . number_format($totalperitem, 2) . '</p>
												<button class="pull-right btn remove-btn"><a href="cart.php?action=remove&id='.$id.'">Remove</a></button>
										</div> 
									</div> 
								';
							}

						} else {
							echo '<p class="message-empty-basket">Your shopping basket is empty.</p>';

						}
										

						?>

					</div> <!-- ./basket-collections -->
				</div> <!-- ./panel -->
				
				<!-- basket total -->

				<?php

				if(!empty($_SESSION['cart'])) {
					echo '
						<div class="panel">
							<div class="basket-total">
								<p class="price">Total <span>PHP ' . number_format($total, 2) . '</span></p>
								<button class="btn btn-primary basket-btn"><a href="order.php">Place Order</a></button>
							</div>
						</div>
					';
				
				}
				?>
				
			</div> <!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->

	<script type="text/javascript">
		
		// function addToCart() {
		// 	var xhttp = new XMLHttpRequest();
		// 	var url = "add_to_cart.php";
		// 	var params = "lorem=ipsum&name=binny";
		// 	http.open("POST", url, true);

		// 	//Send the proper header information along with the request
		// 	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		// 	http.onreadystatechange = function() {//Call a function when the state changes.
		// 	    if(http.readyState == 4 && http.status == 200) {
		// 	        alert(http.responseText);
		// 	    }
		// 	}
		// 	http.send(params);
		// }


		
		



	</script>



<?php


include 'partials/footer.php';

include 'partials/foot.php';

?>