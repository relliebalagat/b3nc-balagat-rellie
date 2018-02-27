<?php

session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	require '../mysqli_connect.php';

	if(!empty($_POST['email'])) {
		$email = mysqli_real_escape_string($dbconn, $_POST['email']);
	}

	if(!empty($_POST['password1'])) {
		$password = mysqli_real_escape_string($dbconn, $_POST['password1']);
	}

	if($email && $password) {

		
		$query = "SELECT users.email, users.password, users.first_name FROM users WHERE email='$email'";

		$result = mysqli_query($dbconn, $query);

		if(mysqli_num_rows($result) == 1) {

			$data = mysqli_fetch_assoc($result);

			//var_export($data);
			$_SESSION['first_name'] = $data['first_name'];

			header('location: ../home.php');
		}
	}

}