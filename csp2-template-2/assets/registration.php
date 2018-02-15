<?php

require '../connect.php';

$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$image = 'http://lorempixel.com/300/300';
$role_id = 3; // default role id
$first_name = 'Juan';
$last_name = 'Dela Cruz';
$address = 'Mandaluyong City';
$contact = '09997785468';

//echo $userName . ' ' . $passWord . ' ' . $email;

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

// $newUser = array('username' => $userName, 'password' => $passWord, 'email' => $email, 'role' => 'user');

// array_push($users, $newUser);

// $jsonFile = fopen('users.json', 'w');
// fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
// fclose($jsonFile);

$sql = "insert into users(email, image, username, password, first_name, last_name, address, contact, role_id) values('$email', '$image', '$username', '$password', '$first_name', '$last_name', '$address', '$contact', '$role_id')";

// send query to database
$result = mysqli_query($conn, $sql);

// check if create new user was successful
if($result) {
	header('location: ../login.php');
} else {
	die('Error: ' . $sql . '<br>' . mysqli_error($conn));
} 

mysqli_close($conn);

