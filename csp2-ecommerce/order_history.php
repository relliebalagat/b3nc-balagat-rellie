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

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Order Reference Number</h4>
							<small><a href="#" class="set-right">View Order Details</a></small>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<?php

									$order_history_query = "SELECT o.order_date, os.name, os.description, po.type, o.total_price, o.delivery_address FROM orders o  WHERE customer_id=$id";

									$order_history_result = mysqli_query(db_connnect(), $order_history_query);

									if(mysqli_num_rows($order_history_result) > 0) {
										while($order_history = mysqli_)
									}
									?>

									<table class="table table-striped">
										<tr>
											<td>Date Ordered</td>
											<td></td>
										</tr>
										<tr>
											<td>Delivery Address</td>
											<td></td>
										</tr>
										<tr>
											<td>Order Status</td>
											<td></td>
										</tr>
										<tr>
											<td>Payment Options</td>
											<td></td>
										</tr>
									</table>
										

								</div>
							</div> <!-- ./row -->
						</div> <!-- ./panel-body -->
					</div> <!-- ./panel -->

				</div> <!-- ./order-history -->
			</div>  <!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->




<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>