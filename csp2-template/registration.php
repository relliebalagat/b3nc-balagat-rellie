<?php 

$userName = htmlspecialchars($_POST['username']);
$passWord = sha1(htmlspecialchars($_POST['password']));
# $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

# echo $userName . ' ' . $password . ' ' . $confirmPassword;

#require 'assets/users.php';
# var_dump($users)
# array_push($users, ["username" => $userName, "password" => $password]);
# var_exports($users);

# import json file 
$file = file_get_contents('assets/users.json');
	
#convert to associative array
$users = json_decode($file, true);

// var_export($users);

array_push($users, array("username" => $userName, "password" => $passWord));

var_export($users);

// open the file to be updated
$file = fopen('assets/users.json', 'w');

// update the users.json file
fwrite($file, json_encode($users, JSON_PRETTY_PRINT));

// close the file
fclose($file);

// reroute to login.php
header('location: index.php');