<?php

$page_title = 'My Account';

include 'partials/header.php';

if(!isset($_SESSION['user_id'])) {
	header('Location: registration.php');
}
?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="my-account">
					<h2 class="text-center">My Account</h2>
					<img src="assets/img/profile_picture.png">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-center">Personal and Orders Details</h3>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><a href="password.php">Change Password</a></li>
							<li class="list-group-item"><a href="#">My Wishlist</a></li>
							<li class="list-group-item"><a href="#">Order History, Status, &amp; Returns</a></li>
							
						</ul>
					</div>	<!-- ./panel panel-default -->
				</div> 	<!-- ./my-account -->
			</div>	<!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->




<?php

include 'partials/footer.php';

include 'partials/foot.php';

?>