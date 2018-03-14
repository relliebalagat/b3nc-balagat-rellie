
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
				<?php

				if(isset($_SESSION['id'])) {
					echo '<a class="navbar-brand" href="home.php">Project name</a>';
				} else {
					echo '<a class="navbar-brand" href="index.php">Project name</a>';
				}

				?>
				
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="about.php">About</a></li>
					<li><a href="collections.php">Collections</a></li>
					<?php

					if(isset($_SESSION['first_name'])) {
						echo '<li><a href="account.php"><span class="glyphicon glyphicon-user"></span>My Account</a></li>';
						echo '<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" id="noItemCart"></span>Cart</a></li>';
						echo '<li><a href="assets/logout.php">Log out</a></li>';
					}  else {
						echo '<li><a href="login.php">Sign In</a></li>';
						echo '<li><a href="registration.php">Register</a></li>';
						echo '<li id="cart"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" id="noItemCart"></span>Cart</a></li>';
					}

					?>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>