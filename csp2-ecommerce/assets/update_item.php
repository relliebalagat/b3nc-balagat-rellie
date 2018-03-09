<?php

require '../mysqli_connect.php';

$db_connect = db_connect();

// if((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
// 	$id = $_POST['book_id'];
// } else if((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
// 	$id = $_GET['book_id'];
// } else {
// 	echo "NO id";
// }
echo $_POST['genre'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$id = $_POST['book_id'];
	$db_connect = db_connect();

	if(isset($_POST['booktitle'])) {
		$book_title = mysqli_real_escape_string($db_connect, trim($_POST['booktitle']));
	}

	if(isset($_POST['description'])) {
		$book_description = mysqli_real_escape_string($db_connect, trim($_POST['description']));
	}

	if(isset($_POST['quantity'])) {
		$quantity = mysqli_real_escape_string($db_connect, trim($_POST['quantity']));
	}

	// update author
	if(isset($_POST['firstname']) && isset($_POST['lastname'])) {
		$first_name = mysqli_real_escape_string($db_connect, trim($_POST['firstname']));
		$last_name = mysqli_real_escape_string($db_connect, trim($_POST['lastname']));
	}

	if(isset($_POST['genre'])) {
		$genre_id = $_POST['genre'];
	}

	if(isset($_POST['price'])) {
		$price = mysqli_real_escape_string($db_connect, trim($_POST['price']));
	}

	
	// $query = "UPDATE books, authors SET books.title='$book_title', books.description='$book_description', books.quantity=$quantity, authors.first_name='$first_name', authors.last_name='$last_name', books.genre_id=$genre_id, books.price=$price WHERE books.id=$id AND books.author_id=authors.id";
	
	$query = "UPDATE books INNER JOIN authors ON books.id=authors.id SET books.title='$book_title', books.description='$book_description', books.quantity=$quantity, authors.first_name='$first_name', authors.last_name='$last_name', books.genre_id=$genre_id, books.price=$price WHERE books.id=$id;";

	$result = @mysqli_query(db_connect(), $query);

	if(mysqli_affected_rows($db_connect)) {
		echo "Update was successful";
	} else {
		echo "Update NOT successful";
	}
}



