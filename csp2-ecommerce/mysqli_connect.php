<?php

// Set the connection to database

DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME', 'capstone2_ecommerce');

$dbconn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$dbconn) {
	die('Could not connect to MySQL: ' . mysqli_connect_error());
}

mysqli_set_charset($dbconn, 'utf8');
