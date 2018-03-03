<?php

session_start();

$page_title = 'Sign In';

include 'partials/header.php';

// if(!isset($_SESSION['user_id'])) {
// 	header('location: ../index.php');
// }



?>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<form class="account-form-set" id="signInForm" action="assets/change_password.php" method="POST">
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
						<!-- <input type="button" name="submit" class="btn btn-primary" id="changePassword" value="Change Password" data-toggle="modal" data-target="#changePassword"> -->

						<button type="button" class="btn btn-primary full-width" data-toggle="modal" data-target="#cp" id="changePassword">
							Change Password
						</button>
						<hr>

						<!-- Modal -->
						<div class="modal fade" id="cp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<span class="modal-title" id="exampleModalLongTitle">Change Password</span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Are you sure you want to change your password?
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary">Yes</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</div>


					</form>
				</div>	<!-- ./form-group -->
			</div>	<!-- ./col-lg-12 -->
		</div>	<!-- ./row -->
	</div>	<!-- ./container -->



<?php

include 'partials/foot.php';

?>