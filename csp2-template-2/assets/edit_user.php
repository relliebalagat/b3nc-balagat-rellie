<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('users.json');
$users = json_decode($file, true);

echo '
<div>
	<label>Username</label>
	<input name="username" class="form-control" type="text" value="'.$users[$id]['username'].'">

	<label>Password</label>
	<input type="password" value="'.$users[$id]['password'].'">

	<label>Email Address</label>
	<input type="email" value="'.$users[$id]['email'].'">
';

$roles = ['admin', 'user', 'staff', 'maintenance', 'security'];

echo'
	<label>Role</label>
	<select class="form-control">';
		foreach($roles as $key => $role) {
			if ($users[$id]['role'] === $role) {
				echo '<option selected>'. $role .'</option>';
			} else {
				echo '<option>'. $role .'</option>';
			}
		}
	echo '
	</select>
</div>
';
