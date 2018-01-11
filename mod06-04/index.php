<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming - Expressions, Control Statements, and Loops</title>
</head>
<body>

	<?php 

	// Logical Operators

	// AND => &&, OR => || , XOR => , NOT => !

	// $a = 1;
	// $b = 0;

	// echo ($a AND $b) . '<br>'; // NULL

	// echo ($a OR $b) . '<br>'; // 1

	// echo ($a XOR $b) . '<br>'; // 1

	// echo (!$a) . '<br>'; // NULL

	// Truth Table

	// a 	b 	  AND    	OR 		XOR
	// $a and $b => false

	// $a = 1;
	// $b = 0;
	// var_dump($a OR $b);
	// var_dump($a AND $b);
	// var_dump($a XOR $b);

	// echo($a AND $b) . '<br>';

	// $a = 0;
	// $b = 1;
	// var_dump($a AND $b);
	// var_dump($a OR $b);
	// var_dump($a XOR $b);
	
	// $a AND $b => false

	// $a = 0;
	// $b = 0;
	// var_dump($a AND $b);
	// var_dump($a OR $b);
	// var_dump($a XOR $b);

	// $a = 1;
	// $b = 1;

	// var_dump($a AND $b);
	// var_dump($a OR $b);
	// var_dump($a XOR $b);

	// $a = 1;
	// $b = 0;
	// var_dump(!$a);
	// var_dump(!$b);

	?>

	<?php 

	// BMI CALCULATOR
	// bmi = mass(kg) / height * height (m);

	// result:
	// < 16 -> severe thinness
	// 16 - 17 -> moderate thinness
	// 17 - 18.5 -> mild thinness
	// 18.5 - 25 -> normal
	// 25 - 30 -> overweight
	// 30 - 35 -> obese class 1
	// 35 - 40 -> obese class 2
	// > 40 -> obese class 3

	$mass = 75; 
	$height = 1.9;

	$bmi = $mass / ($height * $height)	;

	echo 'Your BMI is ' . $bmi . '<br>';

	// if($bmi < 16)
	// 	echo 'Result: Severe Thinness' . '<br>';
	// else if($bmi >= 16 AND $bmi <= 17)
	// 	echo 'Result: Moderate Thinness' . '<br>';
	// else if($bmi > 17 AND $bmi <= 18.5)
	// 	echo 'Result: Mild Thinness' . '<br>';
	// else if($bmi > 18.5 AND $bmi <= 25)
	// 	echo 'Result: Normal. ' . '<br>';
	// else if($bmi > 25 AND $bmi <= 30)
	// 	echo 'Result: Overweight.' . '<br>';
	// else if($bmi > 30 AND $bmi <= 35)
	// 	echo 'Result: Obese Class 1.' . '<br>';
	// else if($bmi > 35 AND $bmi <= 40)
	// 	echo 'Result: Obese Class 2.' . '<br>';
	// else 
	// 	echo 'Result: Obese Class 3.' . '<br>';


	// switch($bmi) {
	// 	case $bmi < 16:
	// 		echo 'Result: Severe Thinness' . '<br>';
	// 		break;
	// 	case $bmi >= 16 AND $bmi <= 17:
	// 		echo 'Result: Moderate Thinness' . '<br>';
	// 		br$bmi > 17 AND $bmi <= 18.5:
	// 		echo 'Result: Mild Thinness' . '<br>';
	// 		break;
	// 	case $bmi > 18.5 AND $bmi <= 25:
	// 		echo 'Result: Normal' . '<br>';
	// 		breeak;
	// 	case ak;
	// 	case $bmi > 25 AND $bmi <= 30:
	// 		echo 'Result: Overweight' . '<br>';
	// 		break;
	// 	case $bmi > 30 AND $bmi <= 35:
	// 		echo 'Result: Obese Class 1' . '<br>';
	// 		break;
	// 	case $bmi > 35 AND $bmi <= 40:
	// 		echo 'Result: Obese Class 2' . '<br>';
	// 		break;
	// 	case $bmi > 40:
	// 		echo 'Result: Obese Class 3' . '<br>';
	// 	default:
	// 		break;

	// $number = 1;

	// while(number < 10) {
	// 	echo $number . ' ';
	// 	$number = $number + 2;
	// }

	// $count = 15;

	// do {
	// 	echo $count . ' ';
	// 	$count--;
	// } while ($count > 0);

	// $name = 'Juan Dela Cruz';

	// for($counter = 1; $counter <= 10; $counter += 1) {
	// 	echo $name . '<br>';
	// }


	?>

</body>
</html>