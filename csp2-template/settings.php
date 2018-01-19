<?php

session_start();

function getTitle() {
	echo 'Settings | Welcome to Beeer Web App'; 
}	

include ('partials/head.php');

$file = file_get_contents('assets/users.json');
$users = json_decode($file, true);

?>

</head>
<body>

	<header>
		<?php
			require 'partials/main_navigation.php';
		?>
	</header>

	<main class="wrapper">
		<h1>Settings</h1>

		<table>
			<thead>
				<th>Username</th>
				<th>Password</th>
				<th>Role</th>
			</thead>
			<tbody>

				<?php
					foreach ($users as $id => $user) {
						echo '<tr>' .
							'<td><a href="user.php?id=' . $id . '">' . $user['username'] . '</a></td>' .
							'<td>' . $user['password'] . '</td>' .
							'<td>' . $user['role'] . '</td>' .
						'</tr>';		
					}
				?>
				
			</tbody>
		</table>



	</main>

	<footer>
		<?php
			include 'partials/footer.php';
		?>
	</footer>


<?php
include 'partials/foot.php';
?>

