<?php

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics($day) {

	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'eleventh', 'twelfth');

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

	
	for($i = 0; $i < $day; $i++){
		echo "<div style='display: none;' id='day" . ($i + 1) . "'>";
		$line = array();
		$line[0] = "<h3>On the " . $days[$i] . " of Christmas my true love sent to me: " . "</h3>";	

		$j = $i;
		$k = 0;

		while($j >= 0){
			$line[++$k] = "<p>" . $gifts[$j] . "</p>";
			$j--;
		}
		
		for($print_ctr = 0; $print_ctr < count($line); $print_ctr++){
			echo $line[$print_ctr] . "<br>";
		}
		echo "</div>";
		echo "<br>";
		
		if($i == 0){
			$gifts[0] = "and A partridge in a pear tree.";
		}
	}


}

?>