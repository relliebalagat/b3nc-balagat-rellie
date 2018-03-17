<?php

session_start();

require 'mysqli_connect.php';

// $order_pullup_query = "SELECT o.id, o.reference_no, o.order_date, o.shipping_date, o.delivery_address, o.country, po.type  FROM orders o INNER JOIN payment_options po ON o.payment_options_id = po.id ORDER BY o.id DESC LIMIT 1";

// $order_pullup_result = mysqli_query(db_connect(), $order_pullup_query);

// echo mysqli_num_rows($order_pullup_result);

// echo $_SESSION['item_count'];

// var_dump($_SESSION['cart']);
// var_dump($_SESSION['item_count']);

