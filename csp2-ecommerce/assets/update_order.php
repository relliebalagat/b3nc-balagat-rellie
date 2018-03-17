<?php

require '../mysqli_connect.php';

$db_connect = db_connect();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$id = $_POST['order_id'];

	if(isset($_POST['orderstatus'])) {
		$order_status = mysqli_real_escape_string($db_connect, trim($_POST['orderstatus']));
	}

	$query = "UPDATE orders o SET o.order_status_id=$order_status WHERE o.id=$id";

	$result = mysqli_query(db_connect(), $query);

	if(mysqli_affected_rows($db_connect)) {
		header('Location: ../admin.php');
	} else {
		echo "Update NOT successful";
	}
}



