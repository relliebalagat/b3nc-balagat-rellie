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
					<form class="account-form-set" id="signInForm" action="#" method="POST">
						<h3 class="text-center">Sign in</h3>

						<label>Email</label>
						<input type="email" name="email" class="form-control" id="inputEmail">

						<label>Password</label>
						<input type="password" name="password1" class="form-control" id="inputPassword">

						<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Sign In">
						<p class="text-center"><a href="#">Forgot Password?</a></p>
						<hr>
						<p class="text-center">By creating an account, you agree to our <a href="#">Terms and Condition</a> and <a href="#">Privacy Notice</a>.</p>
						<hr>
						<p class="text-center">New to us? <a href="registration.php">Register</a></p>
					</form>
				</div>	<!-- ./form-group -->
			</div>	<!-- ./col-lg-12 -->
		</div>	<!-- ./row -->
	</div>	<!-- ./container -->

</body>
</html>