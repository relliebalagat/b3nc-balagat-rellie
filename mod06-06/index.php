<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming - Expressions, Control Statements, and Loops</title>
	<style type="text/css">
		

		.black {
			width: 25px;
			height: 25px;
			background-color: black;
			display: inline-block;
			color: white;
		}		

		.white {
			width: 25px;
			height: 25px;
			background-color: white;
			display: inline-block;
			color: black;
		}

		table, thead, tr, td {
			border: 1px solid black;
			padding: 10px;
			border-collapse: collapse;
		}

		th {
			color: white;
			background-color: black;
		}

	</style>
</head>
<body>

	<?php 

	// ACTIVITY 1

	// for($i = 1; $i <= 8; $i++) {
	// 	if($i % 2 == 1) {
	// 		for($j = 1; $j <= 8; $j += 1) {
	// 			if($j % 2 == 1)
	// 				echo "<div class='black'></div>";
	// 			else
	// 				echo "<div class='white'></div>";
	// 		}
	// 	} else {
	// 		for($j = 1; $j <= 8; $j += 1) {
	// 			if($j % 2 == 1)
	// 				echo "<div class='white'></div>";
	// 			else
	// 				echo "<div class='black'></div>";
	// 		}
	// 	}
	// 	echo "<br>";
	// }

	// for ($row = 1; $row <= 8; $row++) { 
	// 	for($col = 1; $col <= 8; $col++) {
	// 		$total = $row + $col;

	// 		if($total % 2 == 0)
	// 			echo "<div class='white'>$total</div>";
	// 		else
	// 			echo "<div class='black'>$total</div>";

	// 	}
	// 	echo "<br>";
	// }

	// $a = 111;
	// $b = 000;
	// $temp = 0;

	// echo "Numbers before swap: <br>";
	// echo '$a = ' . $a . "<br>";
	// echo '$b = ' . $b . "<br>";
	// // swap
	
	// $temp = $a;
	// $a = $b;
	// $b = $temp;

	// echo "Numbers after swap: <br>";
	// echo '$a = ' . $a . "<br>";
	// echo '$b = ' . $b . "<br>";


 	// $a = 2;
	// $b = 3;

	// echo "Numbers before swap: <br>";
	// echo '$a = ' . $a . "<br>";
	// echo '$b = ' . $b . "<br>";

	// $b = $a;
	// $a = $b;

	// echo "Numbers before swap: <br>";
	// echo '$a = ' . $a . "<br>";
	// echo '$b = ' . $b . "<br>";

	// $colors = ["red", "green", "blue"];
	// $arrlength = count($colors);

	// for($x = 0; $x < $arrlength; $x++) {
	// 	echo $colors[$x] . "<br>";
	// }

	// $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

	// foreach($age as $arr_key => $arr_value) {
	// 	echo "Key: " . $arr_key . ", Value=" . $arr_value . "<br>";
	// }

	// foreach($colors as $key => $value) {
	// 	echo "Key: " . $key . ", Value=" . $value . "<br>";
	// }

	// $ages = [
	// 	'Ash' => 21,
	// 	'Misty' => 22,
	// 	'Brock' => 23
	// ];

	// foreach ($ages as $key => $age) {
	// 	echo "The age of " . $key . " is " . $age . "<br>";
	// }

	// $team_ironman = ["Tony", "War Machine", "Vision"];
	// $team_cap = ["Cap America", "Bucky", "Hawkeye", "Falcon"];
	// $civil_war = [$team_ironman, $team_cap];

	// echo $civil_war[0][0];
	// echo $civil_war[1][0];
	// echo $civil_war[0][2];
	// echo $civil_war[1][1];
	// echo $civil_war[3][3];

	$items = [
		['product' => 'Lenovo laptop', 'price' => 600.00, 'quantity' => 100],
		['product' => 'Asus Tablet', 'price' => 100.00, 'quantity' => 10],
		['product' => 'Acer-all-in-one', 'price' => 300.00, 'quantity' => 50],
		['product' => 'HP Laptop', 'price' => 400.00, 'quantity' => 1],
		['product' => 'Dell desktop', 'price' => 350.00, 'quantity' => 20]
	];

	?>

	<ul>
		<?php 

		foreach($items as $item) {
			echo '<li>' . $item['product'] . '</li>';
			// foreach ($items as $key => $value) {
			// 	echo '<li>' . $value['product'] . '</li>';
			// }
		}

		?>
	</ul>

	<ul>
		<?php 
		foreach($items as $item) {
			echo '<li>' . $item['price'] . '</li>';
		}
		?>

	</ul>

	<ul>
		
		<?php

			foreach ($items as $quantities) {
				echo '<li>' . $quantities['quantity']. '</li>';
			}
		?>

	</ul>
	
	<table>
		<thead>
			<th>Products</th>
			<th>Price</th>
			<th>Quantity</th>
		</thead>
		<tbody>
			<?php
				
				foreach($items as $item) {
					echo '<tr>';
					echo '<td>' . $item['product'] . '</td>';
					echo '<td>' . $item['price'] . '</td>';
					echo '<td>' . $item['quantity'] . '</td>';
					echo '<tr>';
				}
			?>
		</tbody>
		<tr>
			

		</tr>

	</table>


</body>
</html>