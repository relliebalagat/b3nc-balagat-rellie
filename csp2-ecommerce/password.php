<?php

session_start();

$page_title = 'Sign In';

include 'partials/header.php';

// if(!isset($_SESSION['user_id'])) {
// 	header('location: ../index.php');
// }

echo $_SESSION['user_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	require 'mysqli_connect.php';

	$password = false;

	if($_POST['new_password'] == $_POST['confirm_password']) {
		$password = mysqli_real_escape_string($dbconn, $_POST['new_password']);
	}

	if($password) {
		$query = "UPDATE users SET password=SHA1('$password') WHERE user_id={$_SESSION['user_id']} LIMIT 1";

		$result = mysqli_query($dbconn, $query);

		if(mysqli_affected_rows($dbconn) == 1) {
			echo '
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Your Password Has Been Changed
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';
		}
	}


}
?>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<form class="account-form-set" id="signInForm" action="password.php" method="POST">
						<h3 class="text-center">Change Password</h3>

						<label>Current Email</label>
						<input type="email" name="email" class="form-control" id="inputEmail" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" disabled>

						<label>Old Password</label>
						<input type="password" name="old_password" class="form-control" id="oldPassword">

						<label>New Password</label>
						<input type="password" name="new_password" class="form-control" id="newPassword">

						<label>Confirm Password</label>
						<input type="password" name="confirm_password" class="form-control" id="confirmPassword">

						<hr>
						<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Change Password" data-toggle="modal" data-target="#exampleModal">
						<hr>
					
					</form>
				</div>	<!-- ./form-group -->
			</div>	<!-- ./col-lg-12 -->
		</div>	<!-- ./row -->
	</div>	<!-- ./container -->

	<?php 


	?>

	<script>
		$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').focus()
		});
	</script>

</body>
</html>