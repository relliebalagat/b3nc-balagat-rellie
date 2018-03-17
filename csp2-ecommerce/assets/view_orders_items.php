<?php

require '../mysqli_connect.php';

$id = $_GET['order'];

$order_total_price = 0;
$total_quantity = 0;

$query_one = "SELECT o.order_status_id, o.payment_options_id, o.reference_no, o.order_date, o.shipping_date, o.total_price, o.delivery_address, o.contact_person, o.country, o.zip_code, o.mobile_no, o.telephone_no, u.first_name, u.last_name FROM orders o INNER JOIN users u ON o.customer_id=u.id WHERE o.id=$id";

$result_one = mysqli_query(db_connect(), $query_one);

if(mysqli_num_rows($result_one) == 1) {
	while ($order_details = mysqli_fetch_assoc($result_one)) {
		$order_total_price = $order_details['total_price'];
		echo '
		<div class="order-column-one">
			<table class="table table-bordered">
			    <tr>
			        <td>Reference No.</td>
			        <td>' . $order_details['reference_no'] . '</td>
			    </tr>
			    <tr>
			        <td>Order By</td>
			        <td>' . $order_details['first_name'] . ' ' . $order_details['last_name'] .'</td>
			    </tr>
			    <tr>
			        <td>Order Date</td>
			        <td>' . $order_details['order_date'] . '</td>
			    </tr>
			    <tr>
			        <td>Payment Options</td>';

		if($order_details['payment_options_id'] == 1) {
			echo '<td>Cash On Delivery</td></tr>';
		} else {
			echo '<td>Paypal</td></tr>';
		}

		echo'	        
			    <tr>
			        <td>Order Status</td>
		';

		
		if($order_details['order_status_id'] == 3) {
			echo '<td>Completed</td></tr>';
		} else if($order_details['order_status_id'] == 2) {
			echo '<td>Shipping</td></tr>';
		} else if($order_details['order_status_id'] == 4) {
			echo '<td>Cancelled</td></tr>';
		} else {
			echo '<td>Pending</td></tr>';
		}

		echo '
				<tr>
			        <td>Shipping Date</td>
			        <td>' . $order_details['shipping_date'] . '</td>
			    </tr>
			    <tr>
			        <td>Delivery Address</td>
			        <td>' . $order_details['delivery_address'] . '</td>
			    </tr>
			    <tr>
			        <td>Contact Person</td>
			        <td>' . $order_details['contact_person'] . '</td>
			    </tr>
			    <tr>
			        <td>Country</td>
			        <td>' . $order_details['country'] . '</td>
			    </tr>
			    <tr>
			        <td>ZIP Code</td>
			        <td>' . $order_details['zip_code'] . '</td>
			    </tr>
			    <tr>
			        <td>Mobile No.</td>
			        <td>' . $order_details['mobile_no'] . '</td>
			    </tr>
			    <tr>
			        <td>Telephone No.</td>
			        <td>' . $order_details['telephone_no'] . '</td>
			    </tr>
			</table>
		</div>
		';
	}
	echo '</table>';
}

$query_two = "SELECT b.title, oi.quantity, oi.price_per_item, oi.total_price_per_item FROM order_items oi INNER JOIN books b ON oi.book_id=b.id WHERE oi.order_id=$id";

$result_two = mysqli_query(db_connect(), $query_two);

if(mysqli_num_rows($result_one) > 0) {

	echo '
	<div class="order-column-two">
		<table class="table table-bordered">
		    <thead>
		        <tr>
		            <td>Item</td>
		            <td>Quantity</td>
		            <td>Price</td>
		            <td>Subtotal</td>
		        </tr>
		    </thead>
	';

	while($order_details = mysqli_fetch_assoc($result_two)) {
		$total_quantity += $order_details['quantity'];
		echo '
			<tr>
		        <td>' . $order_details['title']. '</td>
		        <td>' . $order_details['quantity']. '</td>
		        <td>' . $order_details['price_per_item']. '</td>
		        <td>' . $order_details['total_price_per_item']. '</td>
		    </tr>
		';

	}
	echo '
		<tfoot>
			<tr>
				<td scope="row" colspan="2">TOTAL</td>
				<td>' . $total_quantity . '</td>
				<td>' . number_format( $order_total_price, 2) . '</td>
			</tr>
		</tfoot>

	';

	echo '
		</table>
	</div>
	';
}



   
