<?php

session_start();

require '../mysqli_connect.php';
$dbconnect = db_connect();

// Order reference number
function generateReferenceNumber() {
	$ref_number = "BS-";
	$source = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 
		'B', 'C', 'D', 'E', 'F');

	for($i = 1; $i <= 7; $i++) {
		$index = rand(0, 15);
		$ref_number = $ref_number . $source[$index];
	}
	return $ref_number;
}

$zip_code = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	if((isset($_SESSION['user_id'])) && (isset($_SESSION['roles'])) && (isset($_SESSION['email']))) {

		$user_id = $_SESSION['user_id'];
		$email = $_SESSION['email'];
		$reference_number = generateReferenceNumber();
		
		if(isset($_POST['totalorderprice'])) {
			$total_order_price = mysqli_real_escape_string($dbconnect, trim($_POST['totalorderprice']));
		}

		if(isset($_POST['contactperson'])) {
			$contactperson = mysqli_real_escape_string($dbconnect, trim($_POST['contactperson']));
		}

		if(isset($_POST['deliveryadd'])) {
			$delivery_address_2 = mysqli_real_escape_string($dbconnect, trim($_POST['deliveryadd']));
		}

		if(isset($_POST['country'])) {
			$country = mysqli_real_escape_string($dbconnect, trim($_POST['country']));
		}

		if(isset($_POST['zip_code'])) {
			$zip_code = mysqli_real_escape_string($dbconnect, trim($_POST['zip_code']));
		}

		if(isset($_POST['mobile_number'])) {
			$mobile_number = mysqli_real_escape_string($dbconnect, trim($_POST['mobile_number']));
		}

		if(isset($_POST['tel_number'])) {
			$tel_number = mysqli_real_escape_string($dbconnect, trim($_POST['tel_number']));
		}

		$order_query = "INSERT INTO orders(customer_id, reference_no, order_date, total_price, shipping_date, contact_person, delivery_address, country, zip_code, mobile_no, telephone_no, email) VALUES ($user_id, '$reference_number', NOW(), $total_order_price, DATE_ADD(NOW(), INTERVAL 2 DAY), '$contactperson', '$delivery_address', '$country', $zip_code, $mobile_number, $tel_number, '$email')";
		$result = mysqli_query($dbconnect, $order_query);
		
		if($result) {
			
			if(isset($_SESSION['cart'])) {

				// Get the id of previous query
				$last_id = mysqli_insert_id($dbconnect);

				foreach ($_SESSION['cart'] as $key => $value) {
				
					$book_id = $_SESSION['cart'][$key]['id'];
					$quantity = (int)$_SESSION['cart'][$key]['quantity'];
					$price = floatval($_SESSION['cart'][$key]['price']);
					$total_price_per_item = $quantity * $price;

					$order_items_query = "INSERT INTO order_items(order_id, book_id, price_per_item, quantity, total_price_per_item) VALUES ($last_id, $book_id, $price, $quantity, $total_price_per_item)";
					$order_items_result = mysqli_query($dbconnect, $order_items_query)	;

					if(!$order_items_result) {
						die('Invalid query: ' . mysqli_error());
					}
				}

				// unset($_SESSION['cart']);
				header("../order_success.php");
			}
		}
	}
}






