<?php

require '../mysqli_connect.php';

$query = "SELECT u.id, u.role_id, u.first_name, u.last_name, u.email, u.registration_date from users u";
$result = @mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) > 0) {
	echo '
	<table class="table table-striped">
		<thead>
			<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Role</td>
				<td>Registration Date</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
		</thead>
	';
	while ($item = mysqli_fetch_assoc($result)) {
		
		echo '
			<tr>
				<td>' . $item['first_name'] .'</td>
				<td>' . $item['last_name'] .'</td>

		';

		if($item['role_id'] == 1) {
			echo '<td>Administrator</td>';
		} else {
			echo '<td>Users</td>';
		}

		echo '
				<td>' . $item['email'] .'</td>
				<td>' . $item['registration_date'] .'</td>
				<td class="text-center"><a data-toggle="modal" data-target="#editUserModal" onclick="editUser(' . $item['id'] . ')">Edit</td>
				<td class="text-center"><a data-toggle="modal" data-target="#deleteUserModal" onclick="deleteUser(' . $item['id'] . ')">Delete</td>
			</tr>
		';
	}
	echo '</table>';
}

// mysqli_close();