<?php

require '../mysqli_connect.php';

$id = $_POST['book_id'];

// if((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
// 	$id = $_POST['book_id'];
// } else if((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
// 	$id = $_GET['book_id'];
// } else {
// 	echo "NO id";
// }

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(isset($_POST['booktitle'])) {
		$book_title = $_POST['booktitle'];
	}

	if(isset($_POST['description'])) {
		$book_description = $_POST['description'];
	}

	if(isset($_POST['quantity'])) {
		$quantity = $_POST['quantity'];
	}

	if(isset($_POST['firstname'])) {
		$first_name = $_POST['firstname'];
	}

	if(isset($_POST['lastname'])) {
		$last_name = $_POST['lastname'];
	}

	if(isset($_POST['genre'])) {
		$genre = $_POST['genre'];
	}

	if(isset($_POST['price'])) {
		$price = $_POST['price'];
	}

	

	$query = "UPDATE books b, genres g, authors a SET b.title='{$book_title}', b.description='{$book_description}', b.quantity={$quantity}, a.first_name='{$first_name}', a.last_name='{$last_name}', g.type='{$genre}', b.price={$price} WHERE b.id={$id} LIMIT 1";
	$result = @mysqli_query(db_connect(), $result) or die(mysqli_error());
	echo $query;

	if(mysqli_num_rows($result) == 1) {
		echo '<p>Item successfully edited.</p>';
	}
}



