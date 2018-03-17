<?php

require '../mysqli_connect.php';

$id = $_GET['userid'];

$query = "SELECT u.id, u.first_name, u.last_name FROM users u WHERE u.id=$id LIMIT 1";

$result = @mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) == 1) {

	$user = mysqli_fetch_assoc($result);

	echo '           
		<div class="form-group">
			<label>First Name</label>
			<input type="text" name="userFirstName" class="form-control" value="'. $user['first_name'].'">

			<label>Last Name</label>
			<input type="text" name="userLastName" class="form-control" value="' . $user['last_name'] .'">

			<input hidden name="user_id" value="'. $user['id'] .'">
		</div>             
	';
}

//