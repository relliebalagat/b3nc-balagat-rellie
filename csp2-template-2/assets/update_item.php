<?php

$product_id = $_POST['product_id'];
$product_name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];
// $user_role = $_POST['role'];

$file = file_get_contents('items.json');

$items = json_decode($file, true);

$items[$product_id]['name'] = $product_name;
$items[$product_id]['description'] = $description;
$items[$product_id]['image'] = 'assets/img' . $image;
$items[$product_id]['price'] = $price;

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header("location: ../catalog.php?id=$product_id");




