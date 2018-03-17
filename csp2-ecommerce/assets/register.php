<?php

session_start();

// Check for the form submission

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// database connection
	require '../mysqli_connect.php';
	
	$dbconnect = db_connect();

	if (preg_match('/^[A-Z \'.-]{2,20}$/i', $_POST['firstname'])) {
		$first_name = mysqli_real_escape_string($dbconnect, trim($_POST['firstname']));
	} else {
		echo '<span>Please enter your first name!</span>';
	}

	if (preg_match('/^[A-Z \'.-]{2,40}$/i', $_POST['lastname'])) {
		$last_name = mysqli_real_escape_string($dbconnect, trim($_POST['lastname']));
	} else {
		echo '<span>Please enter your last name!</span>';
	}

	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$email = mysqli_real_escape_string($dbconnect, trim($_POST['email']));
	} else {
		echo '<span>Please enter your last name!</span>';
	}

	if(!empty($_POST['password1'])) {
		if($_POST['password1'] != $_POST['password2']){
			echo '<span>Your password did not match the confirmed password</span>';	
		} else {
			$password = mysqli_real_escape_string($dbconnect, trim($_POST['password1']));
		}
	} else {
		echo '<span>You forgot to enter your password</span>';
	}

	if($first_name && $last_name && $password && $email) {

		// sql query
		$query = "INSERT INTO users (first_name, last_name, email, password, registration_date) VALUES ('$first_name', '$last_name', '$email', SHA1('$password'), NOW())";

		$result = mysqli_query($dbconnect, $query);
		
		if($result) {
			$id = mysqli_insert_id($dbconnect);

			$_SESSION['user_id'] = $id;
			$_SESSION['roles'] = 2;
			$_SESSION['first_name'] = $first_name;
			$_SESSION['email'] = $email;		
			
			header('location: ../home.php');
		}

		mysqli_close($dbconnect); // close the database
		exit();

	} else {

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
		echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';

	}// end of if(empty($errors))

	mysqli_close($dbconnect);
	
} // end of if($_SERVER['REQUEST_METHOD'] == 'POST')




