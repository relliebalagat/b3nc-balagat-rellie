<?php

$page_title = 'Account Registration';

include 'partials/header.php';

?>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<form class="account-form-set" id="registrationForm" action="assets/register.php" method="POST">
						<h3 class="text-center">Create an Account</h3>
						<label>First Name</label>
						<input type="text" name="firstname" class="form-control" id="inputFirstName">

						<label>Last Name</label>
						<input type="text" name="lastname" class="form-control" id="inputLastName">

						<label>Email</label>
						<input type="email" name="email" class="form-control" id="inputEmail">

						<label>Password</label>
						<input type="password" name="password1" class="form-control" id="inputPassword" placeholder="At least 6 characters">

						<label>Verify Password</label>
						<input type="password" name="password2" class="form-control" id="inputPassword2">

						<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Create your Account">

						<p class="text-center">By creating an account, you agree to our <a href="#">Terms and Condition</a> and <a href="#">Privacy Notice</a>.</p>
						<hr>
						<p class="text-center">Already have an account? <a href="signin.php">Sign In</a></p>
					</form>
				</div>	<!-- ./form-group -->
			</div>	<!-- ./col-lg-12 -->
		</div>	<!-- ./row -->
	</div>	<!-- ./container -->

</body>
</html>