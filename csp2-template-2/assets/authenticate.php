<?php
require '../connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// echo $userName . $passWord;

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

$sql = "SELECT u.username, u.password, r.description FROM users u JOIN roles r ON(u.role_id = r.id) WHERE u.username = '$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

var_dump($user);
$isLogInSuccessful = false;

if(mysqli_num_rows($result) > 0) {
	$user = mysqli_fetch_assoc($result);

	if($username == $user['username'] && $password == $user['password']) {
		// echo 'Login was successful';
		$isLogInSuccessful = true;
		$_SESSION['current_user'] = $user['username'];
		$_SESSION['role'] = $user['description'];
		// break;
	}
	
}

// if(mysql_num_rows($user) > 0) {
// } else {
// 	echo 'User not found.';
// }


// var_dump($users);

// foreach ($users as $user) {
// 	echo $user['username'] . ' ' . $user['password'];
// }

if($isLogInSuccessful) {
	// if successful login
	header('location: ../home.php');
} else {
	// if failed login
	header('location: ../login.php');
}

mysqli_close($conn);