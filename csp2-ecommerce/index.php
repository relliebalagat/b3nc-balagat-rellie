<?php

$page_title = 'Null Website';

include 'partials/header.php';
require 'mysqli_connect.php';
include 'assets/functions.php';

?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="jumbotron">
		<img src="assets/img/search-for-books.jpg" alt="A man searching for books to buy.">
		<div class="over text-center">
			<h1>Shop for your books today</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			</p>
		</div>
	</div>

	<div class="container">

		<!-- sale headline -->
	<!-- 	<div class="row">
			<div class="offer text-center">
				<h3 class="offer-text">Get a 20% Discount on our Selected Items</h3>
				<button class="btn btn-primary">Shop Now!</button>
			</div>
		</div> -->
		
		
		<div class="row">
			<h2 class="text-center">Shop by Category</h2>
			<hr>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Fiction</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
					<?php
				$fq_result = collections_query('fiction', 4);

				if($fq_result) {
					if(mysqli_num_rows($fq_result) > 0) {
						while ($item = mysqli_fetch_assoc($fq_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'].'" class="book-img"></a>
								</div>
									<p class="book-title"><a href="items.php?id='.$item['id'].'">'.$item['title'].'</a></p>
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

					$nfq_result = collections_query('non fiction', 4);

					if($nfq_result) {
						if(mysqli_num_rows($nfq_result) > 0) {
							while ($item = mysqli_fetch_assoc($nfq_result)) {
								echo '
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail">
										<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'].'" class="book-img"></a>
									</div>
										<p class="book-title"><a href="items.php?id='.$item['id'].'">'.$item['title'].'</a></p>
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

			<!-- free shipping promo -->
			<!-- <div class="row">
				<div class="col-lg-12"> 
					<div class="offer text-center">
						<h3 class="offer-text">FREE SHIPPING FOR P 1,000 OF MINUMUM PURCHASE</h3>
						<button class="btn btn-primary">LEARN MORE</button>
					</div>
				</div>
			</div> -->

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Textbooks</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
						

				<?php
				$textbook_result = collections_query('textbook', 4);

				if($textbook_result) {
					if(mysqli_num_rows($textbook_result) > 0) {
						while ($item = mysqli_fetch_assoc($textbook_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'] .'" class="book-img"></a>
								</div>
									<p class="book-title"><a href="items.php?id='.$item['id'].'">'. $item['title'] .'</a></p>
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

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Children's Book</a></h4>
					<small><a href="#" class="set-right">View More</a></small>
				</div>
				<div class="panel-body">
					<div class="row">
				

				<?php
				$cb_result = collections_query('children book', 4);

				if($cb_result) {
					if(mysqli_num_rows($cb_result) > 0) {
						while ($item = mysqli_fetch_assoc($cb_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'].'" class="book-img"></a>
								</div>
									<p class="book-title"><a href="items.php?id='.$item['id'].'">'.$item['title'].'</a></p>
									<p class="price">PHP '.$item["price"].'</p>
									<button class="btn btn-primary basket-btn">Add to Basket</button>
							</div>

							';
						}
					}
				}

				mysqli_close(db_connect());
				?>


					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->

		</div> <!-- ./row -->

		<hr>

		<div class="row ">
			<div class="col-lg-12 text-center">
				<div class="subscription">
					<h3>Connect With Us!</h3>
					<ul class="social-media">
						<li><a href="#"><img src="assets/img/social-media-icons/facebook.svg"></a></li>
						<li><a href="#"><img src="assets/img/social-media-icons/twitter.svg"></a></li>
						<li><a href="#"><img src="assets/img/social-media-icons/instagram.svg"></a></li>
						<li><a href="#"><img src="assets/img/social-media-icons/google-plus.svg"></a></li>
						<li><a href="#"><img src="assets/img/social-media-icons/youtube.svg"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="text-center subscription">
					<h3>Subscribe for our newsletters, and more!</h3>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Subscribe</button>
					</div>
				</div>
			</div>
		</div>

	
	</div> <!-- ./container -->
	
<?php

include 'partials/footer.php';

include 'partials/foot.php';

?>