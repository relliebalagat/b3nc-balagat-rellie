<?php

session_start();

require 'mysqli_connect.php';

$cart_total_item = count($_SESSION['cart']);
// echo $cart_total_item;



$total = 0;
$totalperitem = 0;

if(!empty($_SESSION['cart'])) {

	var_dump($_SESSION['cart']);
	foreach ($_SESSION['cart'] as $key => $value) {
		// echo $_SESSION['cart'][$key]['title'];
		// echo $_SESSION['cart'][$key]['quantity'];
		// echo $_SESSION['cart'][$key]['price'];
		// echo $_SESSION['cart'][$key]['image'];
		// echo $_SESSION['cart'][$key]['first_name'];
		// echo $_SESSION['cart'][$key]['last_name'];
		$qty = (int)$_SESSION['cart'][$key]['quantity'];
		echo $qty;
		echo " ";
		$price = (int)$_SESSION['cart'][$key]['price'];
		echo $price;
		echo " ";
		$totalperitem = $qty * $price;
		$total += $totalperitem;

	}

}

echo " ";
echo $total;
