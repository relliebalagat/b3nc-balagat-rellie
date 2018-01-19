<?php

session_start();

function getTitle() {
	echo 'User | Welcome to Beeer Web App'; 
}	

include ('partials/head.php');

$id = $_GET['id'];

$file = file_get_contents('assets/users.json');
$users = json_decode($file, true);

$user = $users[$id];

?>

</head>
<body>

	<header>
		<?php
			require 'partials/main_navigation.php';
		?>
	</header>

	<main class="wrapper">
		<h1>USER</h1>

		<label>Username</label>
		<input type="text" name="username" value="<?php echo $user['username']; ?>">

		<label>Password</label>
		<input type="password" name="username" value="<?php echo $user['password']; ?>">

		<label>Role</label>
		<input type="text" name="username" value="<?php echo $user['role']; ?>">


	</main>

	<footer>
		<?php
			include 'partials/footer.php';
		?>
	</footer>


<?php
include 'partials/foot.php';
?>

