<?php

require '../mysqli_connect.php';

$id = $_POST['userid'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$query = "DELETE FROM users WHERE users.id=$id LIMIT 1";
	$result = @mysqli_query(db_connect(), $query);

	if(mysqli_affected_rows(db_connect()) == 1) {
		header('Location: ../admin.php');
	} else {
		echo "The item has not been deleted";
	}

}