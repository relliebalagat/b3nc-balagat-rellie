<?php

require '../mysqli_connect.php';

$db_connect = db_connect();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$id = $_POST['user_id'];

	if(isset($_POST['userFirstName'])) {
		$user_first_name = mysqli_real_escape_string($db_connect, trim($_POST['userFirstName']));
	}

	if(isset($_POST['userLastName'])) {
		$user_last_name = mysqli_real_escape_string($db_connect, trim($_POST['userLastName']));
	}

	$query = "UPDATE users u SET u.first_name='$user_first_name', u.last_name='$user_last_name' WHERE u.id=$id";

	$result = @mysqli_query(db_connect(), $query);

	if(mysqli_affected_rows($db_connect)) {
		header('Location: ../admin.php');
	} else {
		echo "Update NOT successful";
	}
}



