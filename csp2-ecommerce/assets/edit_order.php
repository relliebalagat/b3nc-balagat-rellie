<?php

require '../mysqli_connect.php';

$id = $_GET['orderid'];

$query = "SELECT o.id, o.reference_no, o.order_date, o.total_price, o.shipping_date, o.delivery_address, o.contact_person, o.country, o.zip_code, o.mobile_no, o.telephone_no, u.first_name, u.last_name FROM orders o LEFT JOIN users u ON o.customer_id=u.id WHERE o.id=$id LIMIT 1";

$result = @mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) == 1) {

	$edit_order = mysqli_fetch_assoc($result);

	echo '           
		<div class="form-group">
			<table class="table table-bordered">
			    <tr>
			        <td>Reference No.</td>
			        <td>' . $edit_order['reference_no'] . '</td>
			    </tr>
			    <tr>
			        <td>Order By</td>
			        <td>' . $edit_order['first_name'] . ' ' . $edit_order['last_name'] .'</td>
			    </tr>
			    <tr>
			        <td>Order Date</td>
			        <td>' . $edit_order['order_date'] . '</td>
			    </tr>
			    <tr>
			        <td>Total Price</td>
			        <td>' . number_format($edit_order['total_price'], 2) . '</td>
			    </tr>
			    <tr>
			        <td>Order Status</td>
			        <td>
						<select name="orderstatus" class="form-control">
							<option value="1">Pending</option>
							<option value="2">Shipping</option>
							<option value="3">Completed</option>
							<option value="4">Cancelled</option>
						</select>
			        </td>
			    </tr>
			    <tr>
			        <td>Shipping Date</td>
			        <td>' . $edit_order['shipping_date'] . '</td>
			    </tr>
			    <tr>
			        <td>Delivery Address</td>
			        <td>' . $edit_order['delivery_address'] . '</td>
			    </tr>
			    <tr>
			        <td>Contact Person</td>
			        <td>' . $edit_order['contact_person'] . '</td>
			    </tr>
			    <tr>
			        <td>Country</td>
			        <td>' . $edit_order['country'] . '</td>
			    </tr>
			    <tr>
			        <td>ZIP Code</td>
			        <td>' . $edit_order['zip_code'] . '</td>
			    </tr>
			    <tr>
			        <td>Mobile No.</td>
			        <td>' . $edit_order['mobile_no'] . '</td>
			    </tr>
			    <tr>
			        <td>Telephone No.</td>
			        <td>' . $edit_order['telephone_no'] . '</td>
			    </tr>
			</table>
			<input type="hidden" name="order_id" value="'. $edit_order['id'] .'">
		</div>             
	';
}