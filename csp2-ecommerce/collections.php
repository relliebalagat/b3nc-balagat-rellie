<?php

$page_title = 'Collections';

include 'partials/header.php';

require 'mysqli_connect.php';

// Query to view the fiction books
$fiction_query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b JOIN genres g ON b.genre_id = g.id WHERE g.description = 'fiction' LIMIT 4";
// result of query for fiction books
$fq_result = mysqli_query($dbconn, $fiction_query) or die(mysqli_error($dbconn));

?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="container">
	
		<div class="collections">
			
			<h2 class="text-center" style="margin-top: 60px;">Collections</h2>

			<div class="row" style="margin-top: 10px;">
				<div class="col-lg-12">
					<ul class="nav nav-tabs nav-justified">
						<li><a href="#">Fiction</a></li>
						<li><a href="#">Non fiction</a></li>
						<li><a href="#">Children's Book</a></li>
						<li><a href="#">Textbook</a></li>
					</ul>	
				</div>
			</div>

			<div>
				

			</div>

		</div>

	</div>

	



<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>