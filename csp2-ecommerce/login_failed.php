<?php

$page_title = 'Sign In';

include 'partials/header.php';

?>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<form class="account-form-set" id="signInForm" action="assets/authentication.php" method="POST">
						<h3 class="text-center">Sign in</h3>

						
						<h6 class="login-failed">Wrong Email or Password</h6>		
						

						<label>Email</label>
						<input type="email" name="email" class="form-control" id="inputEmail">

						<label>Password</label>
						<input type="password" name="password1" class="form-control" id="inputPassword">

						<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Sign In">
						
						<p class="text-center">New to us? <a href="registration.php">Register</a></p>
					</form>
				</div>	<!-- ./form-group -->
			</div>	<!-- ./col-lg-12 -->
		</div>	<!-- ./row -->
	</div>	<!-- ./container -->

</body>
</html>