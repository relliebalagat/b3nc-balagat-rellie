<?php



if(!isset($_SESSION)){
	session_start();	
}

$page_title = 'Home';

include 'partials/header.php';

require 'mysqli_connect.php';

// Query to view the fiction books
$fiction_query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b JOIN genres g ON b.genre_id = g.id WHERE g.description = 'fiction' LIMIT 4";
// result of query for fiction books
$fq_result = mysqli_query($dbconn, $fiction_query) or die(mysqli_error($dbconn));


// Query to view the non fiction books
$nonfiction_query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b JOIN genres g ON b.genre_id = g.id WHERE g.description = 'non fiction' LIMIT 4";
// result of query for non fiction books
$nfq_result = mysqli_query($dbconn, $nonfiction_query) or die(mysqli_error($dbconn));


// Query to view the childrens books
$cb_query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b JOIN genres g ON b.genre_id = g.id WHERE g.description = 'children\'s book' LIMIT 4";
// result of query for non fiction books
$cb_result = mysqli_query($dbconn, $cb_query) or die(mysqli_error($dbconn));


// Query to view the textbooks
$textbook_query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b JOIN genres g ON b.genre_id = g.id WHERE g.description = 'textbook' LIMIT 4";
// result of query for non fiction books
$textbook_result = mysqli_query($dbconn, $textbook_query) or die(mysqli_error($dbconn));


?>
</head>
<body>

	<?php
	
	include 'partials/navigation.php';
	include 'partials/searchbox.php';
	
	?>


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="message-board">
					
					<?php
				
					if(isset($_SESSION['first_name'])) {
						echo '<h2 class="text-center">Welcome, ' . $_SESSION['first_name'] . '</h2>';	
					}

					?>
				</div>
			</div>
		</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Fiction</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
						

				<?php

				if($fq_result) {
					if(mysqli_num_rows($fq_result) > 0) {
						while ($item = mysqli_fetch_assoc($fq_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<img src="'.$item['image'].'" alt="'. $item['description'].'" class="book-img">
								</div>
									<p class="book-title"><a href="#">'.$item['title'].'</a></p>
									<p class="price">PHP '.$item["price"].'</p>
									<button class="btn btn-primary basket-btn">Add to Basket</button>
							</div>

							';
						}
					}
				}

				?>

					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Non Fiction</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
						
					<?php

					if($nfq_result) {
						if(mysqli_num_rows($nfq_result) > 0) {
							while ($item = mysqli_fetch_assoc($nfq_result)) {
								echo '
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail">
										<img src="'.$item['image'].'" alt="'. $item['description'].'" class="book-img">
									</div>
										<p class="book-title"><a href="#">'.$item['title'].'</a></p>
										<p class="price">PHP '.$item["price"].'</p>
										<button class="btn btn-primary basket-btn">Add to Basket</button>
								</div>

								';
							}
						}
					}

					?>



					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->


			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Fiction</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
						

				<?php

				if($cb_result) {
					if(mysqli_num_rows($cb_result) > 0) {
						while ($item = mysqli_fetch_assoc($cb_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<img src="'.$item['image'].'" alt="'. $item['description'].'" class="book-img">
								</div>
									<p class="book-title"><a href="#">'.$item['title'].'</a></p>
									<p class="price">PHP '.$item["price"].'</p>
									<button class="btn btn-primary basket-btn">Add to Basket</button>
							</div>

							';
						}
					}
				}

				?>

					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->


			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Fiction</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
						

				<?php


				if($textbook_result) {
					if(mysqli_num_rows($textbook_result) > 0) {
						while ($item = mysqli_fetch_assoc($textbook_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<img src="'.$item['image'].'" alt="'. $item['description'] .'" class="book-img">
								</div>
									<p class="book-title"><a href="#">'. $item['title'] .'</a></p>
									<p class="price">PHP '. $item["price"] .'</p>
									<button class="btn btn-primary basket-btn">Add to Basket</button>
							</div>

							';
						}
					}
				}

				?>

					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->

	</div>

<?php

include 'partials/footer.php';

include 'partials/foot.php';

?>