<?php

require '../mysqli_connect.php';

$email_input = $_POST['email'];

if(isset($_POST['email'])) {

	$email_query = "SELECT email FROM users WHERE email='$email_input'";
	$email_result = mysqli_query(db_connect(), $email_query);

	if (mysqli_num_rows($email_result) > 0) { 
		echo "true";
	} else {
		echo "false";
	}
}

