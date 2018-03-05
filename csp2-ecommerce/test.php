<?php

for($i = 0; $i < 4; $i++) {
	$compare_id = rand(1, 20);
	
	// while($random_id != $compare_id) {
	// 	$random_id = rand(1, 20);
	// }

	do {
		$random_id = rand(1, 20);
		if($compare_id != $random_id) {
			echo "r".$random_id . "\n";
			continue;
		} else {
			echo "c".$compare_id ."\n";
			break;
		}
	} while(true);
	
}

?>