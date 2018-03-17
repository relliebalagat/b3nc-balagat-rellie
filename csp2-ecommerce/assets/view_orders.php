<?php

require '../mysqli_connect.php';

$query = "SELECT o.id, o.customer_id, o.order_status_id, o.payment_options_id, o.reference_no, o.order_date, o.shipping_date, u.first_name, u.last_name  FROM orders o INNER JOIN users u ON o.customer_id=u.id";

$result = mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) > 0) {
	echo '
	<h2>Orders</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Reference No.</td>
				<td>Ordered By</td>
				<td>Ordered On</td>
				<td>Payment Option</td>
				<td>Status</td>
				<td>Shipping Date</td>
				<td>Complete Details</td>
				<td>Edit</td>
			</tr>
		</thead>
	';
	while ($order = mysqli_fetch_assoc($result)) {
		
		echo '
			<tr>
				<td>' . $order['reference_no'] .'</td>
				<td>' . $order['first_name'] . ' ' . $order['last_name'] .'</td>
				<td>' . $order['order_date'] .'</td>

		';

		if($order['payment_options_id'] == 1) {
			echo '<td>Cash On Delivery</td>';
		} else {
			echo '<td>Paypal</td>';
		}

		if($order['order_status_id'] == 3) {
			echo '<td>Completed</td>';
		} else if($order['order_status_id'] == 2) {
			echo '<td>Shipping</td>';
		} else if($order['order_status_id'] == 4) {
			echo '<td>Cancelled</td>';
		} else {
			echo '<td>Pending</td>';
		}

		echo '
				<td>' . $order['shipping_date'] .'</td>
				<td class="text-center"><a data-toggle="modal" data-target="#viewOrderModal" onclick="loadOrderDetails(' . $order['id'] . ')">View</td>
				<td class="text-center"><a data-toggle="modal" data-target="#editOrderModal" onclick="editOrder(' . $order['id'] . ')">Edit</td>
			</tr>
		';
	}
	echo '</table>';
}



