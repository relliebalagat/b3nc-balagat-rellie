<?php

$id = $_GET['id'];
echo $id;
// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

// echo '
// <div>
// 	<label>Username</label>
// 	<input name="username" class="form-control" type="text" value="'.$users[$id]['username'].'">

// 	<label>Password</label>
// 	<input type="password" value="'.$users[$id]['password'].'">

// 	<label>Email Address</label>
// 	<input type="email" value="'.$users[$id]['email'].'">
// ';

// $roles = ['admin', 'user', 'staff', 'maintenance', 'security'];

// echo'
// 	<label>Role</label>
// 	<select class="form-control">';
// 		foreach($roles as $key => $role) {
// 			if ($users[$id]['role'] === $role) {
// 				echo '<option selected>'. $role .'</option>';
// 			} else {
// 				echo '<option>'. $role .'</option>';
// 			}
// 		}
// 	echo '
// 	</select>
// </div>
// ';

echo '
<div>
	<label>Product Name</label>
	<input class="form-control" name="product-name" type="text" value="'.$items[$id]['name'].'">

	<label>Description</label>
	<input class="form-control" name="descripton" type="text" value="'.$items[$id]['description'].'">

	<label>Image</label>
	<input class="form-control" name="image" type="file" value="'.$items[$id]['image'].'">

	<label>Price</label>
	<input class="form-control" name="price" type="number" value="'.$items[$id]['price'].'">
';

// $roles = ['admin', 'user', 'staff', 'maintenance', 'security'];

// echo'
// 	<label>Role</label>
// 	<select class="form-control">';
// 		foreach($roles as $key => $role) {
// 			if ($items[$id]['role'] === $role) {
// 				echo '<option selected>'. $role .'</option>';
// 			} else {
// 				echo '<option>'. $role .'</option>';
// 			}
// 		}
// 	echo '
// 	</select>
// </div>
// ';