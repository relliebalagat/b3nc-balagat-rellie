<?php 

session_start();

?>
	<!-- NAVIGATION  -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Collections</a></li>
					<?php

					if(isset($_SESSION['first_name'])) {
						echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span>My Account</a></li>';
						echo '<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>';
						echo '<li><a href="#">Log out</a></li>';
					}  else {
						echo '<li><a href="#">Sign In</a></li>';
						echo '<li><a href="#">Register</a></li>';
						echo '<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>';
					}

					?>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>