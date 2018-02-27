<?php

session_start();

if(!isset($_SESSION['user_id'])) {
	header('location: ../index.php');
	exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	require '../mysqli_connect.php';

	$password = false;

	if($_POST['new_password'] == $_POST['confirm_password']) {
		$password = mysqli_real_escape_string($dbconn, $_POST['new_password']);
	}

	if($password) {
		$query = "UPDATE users SET password=SHA1('$password') WHERE user_id={$_SESSION['user_id']} LIMIT 1";

		$result = mysqli_query($dbconn, $query);

		if(mysqli_affected_rows() == 1) {
			echo '
<div class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to change your password?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

	echo "<script>
	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

	</script>";
		}
	}




}