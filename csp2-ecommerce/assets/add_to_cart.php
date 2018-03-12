<?php

session_start();
require '../mysqli_connect.php';


$id = $_POST['item_id'];

if(isset($_SESSION['cart'][$id])) {
	$_SESSION['cart'][$id]['quantity']++;
} else {

	$query = "SELECT b.id, b.title, b.quantity, b.price, b.image, a.first_name, a.last_name FROM books b INNER JOIN authors a ON b.author_id = a.id WHERE b.id=$id";
	$result = mysqli_query(db_connect(), $query);

	$item = mysqli_fetch_assoc($result);

	if((int)$item['quantity'] == 0) {
		//  add an error message
	} else {
		
		$_SESSION['cart'][$id] = array (
			'id' => $item['id'],
			'title' => $item['title'],
			'quantity' => 1,
			'price' => $item['price'],
			'image' => $item['image'],
			'first_name' => $item['first_name'],
			'last_name' => $item['last_name']
		);

		header('Location: ../collections.php');
	}
}

