<?php

function getTitle() {
	echo 'Index | Welcome to Beeer Web App'; 
}	

include ('partials/head.php');

?>

</head>
<body>

	<header>
		<?php
			require 'partials/main_navigation.php';
		?>
	</header>

	<main class="wrapper">
		<h1>Register</h1>

		<form method="POST" action="registration.php">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Username">

			<label>Password</label>
			<input type="password" name="password" id="password" placeholder="Password">

			<label>Confirm Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Password">

			<input type="submit" name="submit" value="Register">
		</form>
	</main>

	<footer>
		<?php
			include 'partials/footer.php';
		?>
	</footer>


<?php
include 'partials/foot.php';
?>

