<?php 

session_start();

function getTitle(){
	echo 'Home | Beeer Web Apps';
}

include 'partials/head.php';

?>

</head>
<body>

	<?php
		require 'partials/main_navigation.php';
	?>

	<main class="wrapper">
		<?php echo $_SESSION['role']; ?>
		<p><?php echo $_SESSION['message']; ?></p>
		<h1>Home</h1>
		<h3>Welcome <?php echo $_SESSION['current_user']; ?></h3>
		
	</main> <!-- ./wrapper -->

	<footer>
		<?php
			include 'partials/footer.php';
		?>
	</footer>

<?php

include 'partials/foot.php'

?>