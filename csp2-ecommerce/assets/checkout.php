<?php

session_start();

require '../mysqli_connect.php';

function generateReferenceNumber() {
	$ref_number = "";

	$source = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 
		'B', 'C', 'D', 'E', 'F');

	for($i = 1; $i <= 10; $i++) {
		$index = rand(1, 16);
		$ref_number = $ref_number . $source[$index];
	}

	return $ref_number;
}