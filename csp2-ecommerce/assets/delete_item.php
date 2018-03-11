<?php

require '../mysqli_connect.php';

$id = $_POST['book_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$query = "DELETE FROM books WHERE books.id=$id LIMIT 1";
	$result = @mysqli_query(db_connect(), $query);

	if(mysqli_affected_rows(db_connect()) == 1) {
		echo "The item has been deleted";
	} else {
		echo "The item has not been deleted";
	}

}