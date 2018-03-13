<?php

session_start();

$page_title = 'Order Success';

include 'partials/header.php';
require 'mysqli_connect.php';

$db_connect = db_connect();

if(!isset($_SESSION['id'])) {
	header('Location: index.php');
}

$order_pullup_query = "SELECT o.reference_no, o.total_price, o.shipping_date, o.delivery_address1, o.delivery_address2, o.country, po.type, oi.quantity, oi.price_per_item, oi.total_price_per_item FROM orders o INNER JOIN order_items oi ON o.id=oi.order_id INNER JOIN books b ON oi.book_id=b.id INNER JOIN payment_options po ON o.payment_options_id=po.id ORDER BY o.id DESC LIMIT 1";

$order_pullup_result = mysqli_query(db_connect(), $order_pullup_query);


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
						<h4>HELLO NAME! YOUR ORDER HAS BEEN PLACED.</h4>
						<p>Your order number is <strong>REFERENCE NUMBER</strong>.</p>
						<p>You will receive an order confirmation to your email with details of your order. Your expected delivery date is on <strong>DATE</strong></p>
						<!-- <button class="btn btn-primary">Account</button> -->

						<h4>ORDER SUMMARY</h4>
						<ul>
							<li>Order Date:<span>ORDER DATE</span></li>
							<li>Delivery Address 1: <span>DELIVERY ADDRESS 1</span></li>
							<li>Delivery Address 2: <span>DELIVERY ADDRESS 2</span></li>
							<li>Purchase Method: <span>PURCHASE METHOD</span></li>
							<li>Country: <span>COUNTRY</span></li>
						</ul>

						<h4>ITEMS ORDERED</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<td></td>
									<td>Product Name</td>
									<td>Price</td>
									<td>Quantity</td>
									<td>Subtotal</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td>asdas</td>
									<td>asdsa</td>
									<td>asdsad</td>
									<td>asdad</td>
								</tr>
								<tr>
									<td></td>
									<td>asdas</td>
									<td>asdsa</td>
									<td>asdsad</td>
									<td>asdad</td>
								</tr>
								<tr>
									<td></td>
									<td>asdas</td>
									<td>asdsa</td>
									<td>asdsad</td>
									<td>asdad</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td>TOTAL</td>
									<td></td>
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