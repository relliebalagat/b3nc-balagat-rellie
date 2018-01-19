<?php

session_start();

function getTitle() {
	echo 'Profile | Welcome to Beeer Web App'; 
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
		<h1>Profile</h1>
	</main>

	<footer>
		<?php
			include 'partials/footer.php';
		?>
	</footer>


<?php
include 'partials/foot.php';
?>

