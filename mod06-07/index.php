<?php

	include 'assets/lib/hello_world.php';
	require 'assets/lib/a_simple_require_file.php';

	// function printTable($rows, $cols) {
	// 	echo "<table border=1>";

	// 	for($i = 0; $i < $rows; $i++) {
	// 		echo "<tr>";
	// 		for($j = 0; $j < $cols; $j++) {
	// 			echo "<td> Content </td>";
	// 		}
	// 		echo "</tr>";
	// 	}
	// 	echo "</table>";
	// }

	// function add($a, $b) {
	// 	$sum = $a + $b;
	// 	return $sum;
	// }

	// function longdate($timestamp) {
	// 	return date("l F jS Y", $timestamp);

	// }

	// function fix_names($n1, $n2, $n3) {
	// 	$n1 = ucfirst(strtolower($n1));
	// 	$n2 = ucfirst(strtolower($n2));
	// 	$n3 = ucfirst(strtolower($n3));
	// 	return $n1 .  " " . $n2 . " " . $n3;
	// }

	// $a1 = "BILLY";
	// $a2 = "peejay";
	// $a3 = "aLLaN";

	// function fix_names2() {
	// 	global $a1; $a1 = ucfirst(strtolower($a1));
	// 	global $a2; $a2 = ucfirst(strtolower($a2));
	// 	global $a3; $a3 = ucfirst(strtolower($a3));
	// }

	// function area_of_rectangle($l, $w) {
	// 	return $l * $w;
	// }

	// $number1 = 20;
	// $number2 = 12;

	// $total = add($number1, $number2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP</title>
</head>
<body>
	
	<?php
		// printTable(15, 15);
		// echo "<br>";
		// printTable(20, 20);

		// echo "<h2>Total is " . $total . "</h2>";

		// echo longdate(time());

		// echo fix_names('WiLlIaM', 'HeNrY', 'gAtEs');

		// echo $a1 . " " . $a2 . " " . $a3 . "<br>";
		// fix_names2();
		// echo $a1 . " " . $a2 . " " . $a3;

		// $length = 50;
		// $width = 30;
		// $area = area_of_rectangle($length, $width);
		// echo "<h3>" . $area . "</h3>";

		iAmRequired();


	?>


</body>
</html>