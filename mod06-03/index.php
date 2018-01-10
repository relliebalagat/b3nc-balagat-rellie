<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP - Expressions, Assignments, Control, Loops</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php 

	// assignment

	// $companyName = "";

	// $companyName = "Tuitt Coding Bootcamp";

	// echo $companyName;

	// $counter = 0;

	// $counter = $counter;

	// echo $counter;
	// echo "<br>";

	// $counter = $counter + 150;

	// $counter += 230;
	// echo $counter;

	// $counter = 15;

	// echo $counter . "<br>";

	// // $counter = $counter + 5;
	// $counter += 5;

	// echo $counter . "<br>";

	// // $counter = $counter - 3;
	// $counter -= 3;

	// echo $counter . "<br>";	

	// // $counter = $counter * 8;
	// $counter *= 8;

	// echo $counter . "<br>";	

	// // $counter = $counter / 16;
	// $counter /= 16;

	// echo $counter . "<br>";

	// $row = 12;

	// $counter = $counter . $row;

	// echo $counter . "<br>";

	// $counter = $counter % 4;

	// echo $counter . "<br>";

	// BEDMAS or PEMDAS
	// Braces/Parenthesis, Division/Multiplication, Addition/Subtraction, 

	// echo 1 +  5 * 3;
	// echo (1 + 5) * 3;

	// $bankBalance = 101;
	// $deposit = 1000;

	// if($bankBalance < 100) {
	// 	$bankBalance = $bankBalance + $deposit;
	// 	echo "Your balance is now updated";
	// } else {
	// 	echo "Your bank balance is greater than or equal to 100";
	// 	echo "Your bank balance is greater than or equal to 100";
	// }

	// echo "<br>" . $bankBalance;

	// $username = "jose@yahoo.com";
	// $password = "";

	// $username = "admin";

	// if($username == "admin") {
	// 	echo "Username: ADMIN";
	// } else {
	// 	echo "Username: " . $username;
	// }

	$first_number = 2;
	$second_number = 3;

	if($first_number > $second_number) {
		echo $first_number . " is greater than " . $second_number . "<br>";
	}

	if($first_number < $second_number) {
		echo $first_number . " is less than " . $second_number . "<br>";
	}

	if($first_number >= $second_number) {
		echo $first_number . " is greater than or equal to " . $second_number . "<br>";
	}

	if($first_number <= $second_number) {
		echo $first_number . " is less than or equal to " . $second_number . "<br>";
	}




	?>


	



</body>
</html>