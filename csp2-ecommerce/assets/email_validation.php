<?php

require '../mysqli_connect.php';

$email_input = $_POST['email'];

if(isset($_POST['email'])) {

	$email_query = "SELECT email FROM users";
	$email_result = mysqli_query(db_connect(), $email_query);

	if (mysqli_num_rows($email_result) > 0) { 
		echo 'Email ';
		while ($email_db = mysqli_fetch_assoc($email_result)) {
		
			if($email_input == $email_db['email']) {
				echo '<span>is already taken</span>';
				break;
			} 
		}
		
	} 
}

