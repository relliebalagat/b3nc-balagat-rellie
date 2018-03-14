<?php

session_start();

require 'mysqli_connect.php';

// $db_connect = db_connect();

// $order_id = 4;

// $order_item_query = "SELECT b.title, oi.price_per_item, oi.quantity, oi.total_price_per_item FROM order_items oi INNER JOIN books b ON oi.book_id=b.id WHERE oi.order_id=$order_id";

// $order_item_result = mysqli_query($db_connect, $order_item_query);

// var_dump($order_item_result);