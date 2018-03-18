<?php

session_start();
require '../mysqli_connect.php';

if(!isset($_SESSION['user_id'])) {
	header('location: ../index.php');
	exit();
} else {

	$id = $_POST['itemid'];
	$item_quantity = $_POST['itemquantity'];

	if(isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quantity'] += $item_quantity;
		$_SESSION['item_count'] = $_SESSION['cart'][$id]['quantity'];
		echo ' <strong class="cart-counter">' . $_SESSION['item_count'] . '</strong>Cart';
	} else {
		// $_SESSION['item_count'] = 0;
		$query = "SELECT b.id, b.title, b.quantity, b.price, b.image, a.first_name, a.last_name FROM books b INNER JOIN authors a ON b.author_id = a.id WHERE b.id=$id";
		$result = mysqli_query(db_connect(), $query);

		$item = mysqli_fetch_assoc($result);

		if((int)$item['quantity'] == 0) {
			//  add an error message
		} else {
			
			$_SESSION['cart'][$id] = array (
				'id' => $item['id'],
				'title' => $item['title'],
				'quantity' => $item_quantity,
				'price' => $item['price'],
				'image' => $item['image'],
				'first_name' => $item['first_name'],
				'last_name' => $item['last_name']
			);

			if(!isset($_SESSION['item_count'])) {
				$_SESSION['item_count'] = 0;
				$_SESSION['item_count'] += $_SESSION['cart'][$id]['quantity'];
			} else {
				$_SESSION['item_count'] += $_SESSION['cart'][$id]['quantity'];
			}

			echo ' <strong class="cart-counter">' . $_SESSION['item_count'] . '</strong>Cart';
			
		}
	}




}


