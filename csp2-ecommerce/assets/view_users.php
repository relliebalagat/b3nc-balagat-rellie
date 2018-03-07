<?php

require '../mysqli_connect.php';

$query = "SELECT u.id, u.role_id, u.first_name, u.last_name, u.email, u.registration_date from users u";
$result = @mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) > 0) {
	echo '
	<table class="table table-striped">
		<thead>
			<tr>
				<td>#</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Role</td>
				<td>Registraion Date</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
		</thead>
	';
	while ($item = mysqli_fetch_assoc($result)) {
		echo '
			<tr>
				<td>' . $item['id'] .'</td>
				<td>' . $item['first_name'] .'</td>
				<td>' . $item['last_name'] .'</td>
				<td>' . $item['email'] .'</td>
				<td>' . $item['role_id'] .'</td>
				<td>' . $item['registration_date'] .'</td>
				<td><a href="#">Edit</td>
				<td><a href="#">Delete</td>
			</tr>
		';
	}
	echo '</table>';
}

// mysqli_close();