<?php
session_start();

$item_cart_id = $_POST['product-id'];
echo $item_cart_id;
// unset($_SESSION['cart'][$item_cart_id]);
array_splice($_SESSION['cart'], $item_cart_id, 1);
header('location: ../cart.php');
