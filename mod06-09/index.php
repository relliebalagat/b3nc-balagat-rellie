<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="IE=Edge">
	<title>GET, POST, and SESSION</title>
</head>
<body>

	<?php

	// $user_name = htmlspecialchars($_GET['username']);
	// $pass_word = htmlspecialchars($_GET['password']);
	// $full_name = htmlspecialchars($_GET['firstname']);
	

	// echo $user_name . '<br>';
	// echo $pass_word . '<br>';
	// echo $full_name . '<br>';

	?>

	<form method="POST" action="lib/validate.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		
		<label for="firstname">Firstname:</label>
		<input type="text" name="firstname" id="firstname">

		<input type="submit" name="submit" value="Submit">
	</form> <!-- /form -->

</body>
</html>