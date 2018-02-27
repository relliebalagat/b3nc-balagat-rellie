<?php

session_start();
if(isset($_SESSION['first_name'])) {
	$_SESSION = array();
	session_destroy();
	header('location: ../index.php');
} 

