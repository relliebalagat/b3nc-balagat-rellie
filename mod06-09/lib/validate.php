<?php 

	$user_name = htmlspecialchars($_POST['username']);
	$pass_word = htmlspecialchars($_POST['password']);
	$first_name = htmlspecialchars($_POST['firstname']);

	echo "
		<h3>Username: $user_name</h3>
		<h3>Password: $pass_word</h3>
		<h3>$first_name Welcome to PHP World!</h3>
	";

?>