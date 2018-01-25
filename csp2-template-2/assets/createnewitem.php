<?php


$item_name = $_POST['itemname'];
$description = $_POST['description'];
$image = $_POST['image'];
$item_price = $_POST['price'];
$category = $_POST['category'];

//echo $userName . ' ' . $passWord . ' ' . $email;

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$image_path = 'assets/img/' . $image;

$newItem = array(
	'name' => $item_name, 
	'description' => $description, 
	'image' => $image_path, 
	'price' => $item_price,
	'category' => $category
);

array_push($items, $newItem);

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../catalog.php');