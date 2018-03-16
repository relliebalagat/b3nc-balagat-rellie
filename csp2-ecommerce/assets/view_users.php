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
				<td>Registration Date</td>
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
				
		';
		
		if($item['role_id'] == 1) {
			echo "<td>Administrator</td>";
		} else {
			echo "<td>User</td>";
		}

		echo '
				<td>' . $item['registration_date'] .'</td>
				<td class="text-center"><a data-toggle="modal" data-target="#editUserModal" onclick="editItem(' . $item['id'] . ')">Edit</a></td>
				<td class="text-center"><a data-toggle="modal" data-target="#deleteUserModal" onclick="deleteItem(' . $item['id'] . ')">Delete</a></td>
			</tr>
		';
	}
	echo '</table>';
}

// mysqli_close();