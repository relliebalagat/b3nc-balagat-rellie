<?php

session_start();

$page_title = 'Order Success';

include 'partials/header.php';
require 'mysqli_connect.php';

$db_connect = db_connect();

if(!isset($_SESSION['user_id'])) {
	header('Location: home.php');
}

?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>



	<div class="container">
		<div class="order-success">
			
			<h2 class="text-center"><i class="far fa-check-circle"></i>THANK YOU FOR YOUR ORDER</h2>

			<div class="row">
				<div class="col-lg-12">
					<div class="order-message">
						<?php

						$order_pullup_query = "SELECT o.id, o.reference_no, o.order_date, o.shipping_date, o.delivery_address1, o.country, po.type  FROM orders o INNER JOIN payment_options po ON o.payment_options_id = po.id ORDER BY o.id DESC LIMIT 1";

						$order_pullup_result = mysqli_query(db_connect(), $order_pullup_query);

						if(mysqli_num_rows($order_pullup_result) == 1) {
							$order = mysqli_fetch_assoc($order_pullup_result);
							$order_id = $order['id'];
							echo '
								<h4>HELLO ' . $_SESSION['first_name'] . '! YOUR ORDER HAS BEEN PLACED.</h4>
								<p>Your order number is <strong>' . $order['reference_no'] . '</strong>.</p>
								<p>You will receive an order confirmation to your email with details of your order. Your expected delivery date is on <strong>' . $order['shipping_date'] . '</strong></p>
								
								<h4>ORDER SUMMARY</h4>
								<ul>
									<li>Order Date:<span>' . $order['order_date'] . '</span></li>
									<li>Contact Person: <span>CONTACT PERSON</span></li>
									<li>Delivery Address: <span>' . $order['delivery_address1'] . '</span></li>
									<li>Purchase Method: <span>' . $order['type'] . '</span></li>
									<li>Country: <span>' . $order['country'] . '</span></li>
								</ul>
							';
						}
						?>
						
						<h4>ITEMS ORDERED</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>Product Name</td>
									<td>Price</td>
									<td>Quantity</td>
									<td>Subtotal</td>
								</tr>
							</thead>
							<tbody>

							<?php 

							$order_item_query = "SELECT b.title, oi.price_per_item, oi.quantity, oi.total_price_per_item, o.total_price FROM order_items oi INNER JOIN books b ON oi.book_id=b.id WHERE oi.order_id=$order_id";

							$order_item_result = mysqli_query($db_connect, $order_item_query);

							if(mysqli_num_rows($order_item_result) > 0) {
								while($order_item = mysqli_fetch_assoc($order_item_result)) {
									$subtotal = ($order_item[''])
									$total_price 

									echo '
										<tr>		
											<td>'.$order_item['title'].'</td>
											<td>'.$order_item['price_per_item'].'</td>
											<td>'.$order_item['quantity'].'</td>
											<td>'.$order_item['total_price_per_item'].'</td>
										</tr>
									';
								}


								echo '</tbody>';
							}

							?>

							
							<tfoot>
								<tr>
									<td>TOTAL</td>
									<td></td>
									<td></td>
									<td class="price">PHP 456.45</td>
								</tr>
							</tfoot>
						</table>

						<button class="btn btn-primary">CONTINUE SHOPPING</button>
						<button class="btn btn-primary pull-right">ACCOUNT</button>

					</div>	
				</div>
			</div> <!-- ./row -->

		
			
		</div> <!-- ./order-success -->
	</div> <!-- ./container -->





<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>