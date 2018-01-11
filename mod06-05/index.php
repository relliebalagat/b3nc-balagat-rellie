<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming - Expressions, Control Statements, and Loops</title>
	<style type="text/css">
		table, tr, td {
			padding: 10px;
			border: 1px solid black;
			border-collapse: collapse;
		}

		span {
			padding: 10px;
			border: 1px solid black;
			display: inline-block;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}

	</style>
</head>
<body>

	<?php 

	// for($ctr = 1; $ctr <= 10; $ctr++) {
	// 	echo $ctr;
	// 	if($ctr == 10)
	// 		break;
	// 	echo "-";
	// 	// if($counter < 10)
	// 	// 	echo "-";
	// }

	// for($i = 1; $i <= 10; $i++){
	// 	for($j = 1; $j <= 10; $j++){
	// 		echo "*";
	// 		if($j < 10) {
	// 			echo " ";
	// 		}
	// 	}
	// 	echo "<br>";
	// }

	//echo '<table>';
	// for($row = 1; $row <= 10; $row++){
	// 	//echo '<tr>';
	// 	for($col = 1; $col <= 10; $col++){
	// 		$product = $row * $col;
	// 		echo "<span>$product</span>";
	// 	}
	// 	echo '</br>';
	// }
	//echo '<table>';
	// 1 2 3

	// for($row = 1; $row <= 10; $row++){
	// 	for($col = 1; $col <= $row; $col++){
	// 		echo "<span>*</span>";
	// 	}
	// 	echo '<br>';
	// }
	
	// for($row = 1; $row <= 10; $row++){
	// 	for($col = 10; $col > $row; $col--){
	// 		echo "<span>*</span>";
	// 	}
	// 	echo '<br>';
	// }

	for($i = 1; $i <= 50; $i++) {
		if ($i % 3 == 0) 
			echo $i . " Fizz <br>";

		if ($i % 5 == 0) 
			echo $i . " Buzz <br>";

		if($i % 3 == 0 && $i % 5 == 0) 
			echo $i . " FizzBuzz <br>";
	}


	?>

	

</body>
</html>