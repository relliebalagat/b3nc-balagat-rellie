<!-- <?php 
	//echo "WELCOME TO PHP Programming!";
	//phpinfo();

	//$name = "Juan Dela Cruz";

	//print "Good Evening, $name";

	echo "Today is " . date("F-j-Y") . ".";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Welcome to PHP Programming!</title>
</head>
<body>

	<?php 
		// $msg = "WELCOME TO PHP";
		// echo "$msg";
		// echo '$msg';

		// $username = 'Jane Smith';
		// echo $username;
		// echo '<br>';
		// $username = 'John Doe';
		// $current_user = $username;
		// echo $current_user;

		// echo 'Buzz Lightyear once said: "You\'re a toy!"<br>';

		// echo 'You deleted C:\\*.*<br>';
		// echo "You deleted C:\*.*";

		// echo 'This will not expand: \n a newline';
		// echo "This will not expand: \n a newline";

		// $number1 = 150;
		// $number2 = 33.5;
		// $sum = $number1 + $number2;
		// $product = $number1 * $number2;
		// $difference = $number1 - $number2;
		// $quotient = $number1 / $number2;

		// echo "Sum is: $sum <br>" . '<br>';
		// echo "Product is: $product <br>" . '<br>';
		// echo "Difference is: $difference <br>" . '<br>';
		// echo "Quotient is: $quotient <br>" . '<br>';

		$members = array('Kato', 'Shem', 'Angeli', 'Ali', 'Carmela');
		$colors = array('red', 'green', 'blue');
		$fruits = array('mango', 'apple', 'orange');

		echo $members[4] . '<br>';
		echo $colors[0] . '<br>';
		echo $fruits[1] . '<br>';
		echo $fruits[2] . '<br>';

		define('USER_NAME', 'Juan Dela Cruz');

		$current_user = USER_NAME;
		
		echo $current_user;


	?>

</body>
</html>