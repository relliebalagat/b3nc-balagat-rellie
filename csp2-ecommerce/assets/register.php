<?php

// Check for the form submission

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// database connection
	require '../mysqli_connect.php';

	$errors = array();

	if(empty($_POST['firstname'])) {
		$errors[] = 'You forgot to enter your FIRST Name.';
	} else {
		$first_name = mysqli_real_escape_string(trim($_POST['firstname']));
	}

	if(empty($_POST['lastname'])) {
		$errors[] = 'You forgot to enter your LAST Name.';
	} else {
		$last_name = mysqli_real_escape_string(trim($_POST['lastname']));
	}

	if(empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your Email Address.';
	} else {
		$email = mysqli_real_escape_string(trim($_POST['email']));
	}

	if(!empty($_POST['password1'])) {
		if($_POST['password1'] != $_POST['password2']){
			$errors[] = 'Your password did not match the confirmed password';
		} else {
			$password = mysqli_real_escape_string(trim($_POST['password1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}


	if(empty($errors)) {

		// sql query
		$query = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('$first_name', '$last_name', '$email', SHA1('$password'), NOW())";

		$result = mysqli_query($dbconn, $query);

		
		if($result) {
			echo '<h2>Thank you for registering</h2>';
			echo '<p>You are now registered</p>';
		} else {
			
			// display error
			echo '<h2>SYSTEM ERROR</h2>';
			echo '<p>You could not be registered because of the system error. We apologize for the inconvenience.</p>';
			echo '<p>' . mysqli_error($dbconn) . '<br /><br />Query: ' . $query . '</p>';
		} // end of if($result)

		mysqli_close($dbconn); // close the database
		exit();

	} else {

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
		echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';

	}// end of if(empty($errors))

	mysqli_close($dbconn);
	
} // end of if($_SERVER['REQUEST_METHOD'] == 'POST')




