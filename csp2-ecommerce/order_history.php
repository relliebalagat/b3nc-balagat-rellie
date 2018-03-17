<?php

session_start();

$page_title = 'About Us';

include 'partials/header.php';
require 'mysqli_connect.php';

$id = $_SESSION['user_id'];

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
				<div class="order-history">
					<h2 class="text-center">ORDER HISTORY</h2>
					<?php
					$order_id = 0;
					$order_history_query = "SELECT o.id, o.reference_no, o.order_date, os.name, os.description, po.type, o.total_price, o.delivery_address FROM orders o INNER JOIN order_statuses os ON o.order_status_id=os.id INNER JOIN payment_options po ON o.payment_options_id=po.id WHERE customer_id=$id";

					$order_history_result = mysqli_query(db_connect(), $order_history_query);
					?>

					

					<?php

						if(mysqli_num_rows($order_history_result) > 0) {
							while($order_history = mysqli_fetch_assoc($order_history_result)) {
								$order_id = $order_history['id'];
								echo '
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="right">Order ' . $order_history['reference_no']. '</h4>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-12 col-md-6">
								';
											echo '
												<table class="table table-bordered table-striped text-center">				
													<tr>
														<td>Date Ordered</td>
														<td>Delivery Address</td>
														<td>Order Status</td>
														<td>Payment Options</td>
													</tr>
													<tr>
														<td>' . $order_history['order_date'] . '</td>
														<td>' . $order_history['delivery_address'] . '</td>							
														<td>' . $order_history['name'] . ' </td>
														<td>' . $order_history['type'] . '</td>						
													</tr>
												</table>

											';

								$subtotal = 0;
								$overall_total = 0;
								$total_quantity = 0;

								$order_item_query = "SELECT b.title, b.image, a.first_name, a.last_name, oi.price_per_item, oi.quantity, oi.total_price_per_item FROM order_items oi INNER JOIN books b ON oi.book_id=b.id INNER JOIN authors a ON b.author_id=a.id WHERE oi.order_id=$order_id";

								$order_item_result = mysqli_query(db_connect(), $order_item_query);

								if(mysqli_num_rows($order_item_result) > 0) {
									echo '
										<table class="table text-center">
											<thead>
												<tr>
													<td>Item</td>
													<td>Price</td>
													<td>Quantity</td>
													<td>Total</td>
												</tr>
											</thead>
									';

									while($order_item = mysqli_fetch_assoc($order_item_result)) {
										$subtotal = $order_item['quantity'] * $order_item['price_per_item'];
										$overall_total += $subtotal;
										$total_quantity += $order_item['quantity'];

										echo '
												<tr>
													<td>
														<div class="order-history-item">
															<img src="' . $order_item['image'] . '" class="text-center">
														</div>
														<div class="order-info-title">
															<p class="text-center">' . $order_item['title'] . '</p>
															<p class="text-center">' . $order_item['first_name'] . " " . $order_item['last_name'] . '</p>
														</div>
													</td>
													
														<td class="order-info-numbers"><span>' . $order_item['price_per_item'] . '</span></td>
														<td class="order-info-numbers"><span>' . $order_item['quantity'] . '</span></td>
														<td class="order-info-numbers"><span>' . $subtotal . '</span></td>
												</tr>
										';
									}
									echo '
										<tfoot>
											<tr>
												<td scope="row" colspan="2" class="price">TOTAL</td>
												<td colspan="1" class="price">' . $total_quantity . '</td>
												<td colspan="1" class="price">' . $overall_total . '</td>
											</tr>
										</tfoot>

									';

									echo '</table>';

								echo '
									
											</div> 
										</div> 
									</div>
								</div>
								';

									
							} // while
						

						



						} // if

						
					}

						
					?>

								
				</div> <!-- ./order-history -->
			</div>  <!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->




<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>