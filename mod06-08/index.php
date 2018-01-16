<?php
	require_once 'assets/lib/twelve_days.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php echo getTitle();?> Lyrics</title>

	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<h1>12 Days of Christmas</h1>
	
	<form>
		<input type="number" id="day-number">
		<button onclick="display_christmas()">Submit</button>
	</form>

	<div id="display"> <?php getLyrics(12); ?></div>

	<script type="text/javascript">
	
		function display_christmas() {
			
			var num = document.getElementById('day-number').innerHTML;
			var idNum = 'div' + num;
			
			if(idNum.style.display == "none"){
				idNum.style.display = "block";
			}
			

		}

	</script>

</body>
</html>