<?php

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics() {

	$days = array('first', 'second', 'third', 'fourth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'eleventh', 'twelfth');

	$gifts = array(
		'A partridge in a pear tree',
		'Two turtle doves',
		'Three Frence Hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming'
	);



	foreach ($days as $value) {
		
		$line = 'On the ' . $value . ' of Christmas my true love sent to me: ' . '<br>';
		echo $line;

		for($i = 0; $i < 12; $i++){
				
			$message = $gifts[$i];
			 
			$message1 = $line . $message . $message1;

			echo $message1 . "<br>";

		}
	}




}

?>