<?php

function getTitle() {
	echo 'Register';
}

include 'partials/head.php';

?>
</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">
		<h1>Register Page</h1>

		<form id="registerForm" method="POST" action="assets/registration.php" class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Enter username" class="form-control" required>

			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Enter password" class="form-control" required>

			<label for="confrim-password">Confirm Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter password again" class="form-control" required>	

			<label for="email">Email Address</label>
			<input type="email" name="email" id="email" placeholder="email@domain.com" class="form-control" required>	


			<input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary">
		</form>


	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


<?php

include 'partials/foot.php';

?>

<script type="text/javascript">
	// $('#username').keyup(function() {
	$('#username').on('input', function() {
		var usernameText = $(this).val();
		// console.log(usernameText);
		$.post('assets/username_validation.php', {username: usernameText}, function(data, status) {
			// console.log(data);
			$('[for="username"]').html(data);
		});
	});

	// password validation
	
	// $('#password').keypress(function() {
		
	// 	console.log(passWord);
	// })
	 

	$('#confirmPassword').on('input' , function() {
		var pw = $('#password').val()
		var cpw = $(this).val();

		// console.log(pw);
		// console.log(cpw);
		
		
		if(pw != '' && cpw != ''){
			if(pw !== cpw){
				//$('#validate').text('Password does not match');
				$('[for="password"]').html('Password <span class="red-message">mismatched</span>');
			} else {
				$('[for="password"]').html('Password <span class="green-message">matched</span>');
			}
		}

	});

	$('#email').on('input', function() {
		var emailText = $(this).val();
		// console.log(usernameText);
		$.post('assets/email_validation.php', {emailname: emailText}, function(data, status) {
			// console.log(data);
			$('[for="email"]').html(data);
		});
	});

</script>

</body>
</html>