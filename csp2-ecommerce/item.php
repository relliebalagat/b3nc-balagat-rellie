<?php

$page_title = 'About Us';

include 'partials/header.php';

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
				
				<div class="item-container">
					
					<div class="panel">
						<div class="img-container">
							<img src="assets/img/product-images/1984.jpg" class="center-block">
						</div>
						<div class="content">
							<h3 class="text-center">Book Title</h3>
							<p class="text-center">Author</p>
							<p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

							<p class="price">PHP 1000.00</p>
							<p><i class="fas fa-rocket"></i>FREE DELIVERY WORLDWIDE</p>
							<p><a href="#"><i class="fas fa-clock"></i>Check Order Arrival</a></p>
							<button class="btn btn-primary basket-btn">Add to Basket</button>
							<button class="btn btn-default">Add to Wishlist</button>
							 
						</div> <!-- ./content -->
					</div> <!-- ./pane; -->
				</div> <!-- ./item-container -->
			</div> <!-- ./col-lg-12 -->
		</div> <!-- ./row -->


		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><a href="#">Other Collections you Might Want to See</a></h4>
				<small><a href="#" class="set-right">View More</a></small>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="thumbnail">
							<img src="assets/img/the-lord-of-the-rings.gif" alt="The Lord of the rings book cover" class="book-img">
						</div>
							<p class="book-title"><a href="#">The Lord of the Rings Trilogy</a></p>
							<p class="price">PHP 1,100.00 <small>PHP 1200</small></p>
							<p class="save-price">Save PHP 100.00</p>
							<button class="btn btn-primary basket-btn">Add to Basket</button>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="thumbnail">
							<img src="assets/img/outliers.png" alt="Outliers book cover" class="book-img">
						</div>
							<p class="book-title">Outliers</p>
							<p class="price">PHP 1100.00 <small>PHP 1200</small></p>
							<p class="save-price">Save PHP 100.00</p>
							<button class="btn btn-primary basket-btn">Add to Basket</button>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="thumbnail">
							<img src="assets/img/java-complete-reference.png" alt="Java Reference Guide book cover" class="book-img">
						</div>
							<p class="book-title">Java The Complete Reference</p>
							<p class="price">PHP 1100.00 <small>PHP 1200</small></p>
							<p class="save-price">Save PHP 100.00</p>
							<button class="btn btn-primary basket-btn">Add to Basket</button>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="thumbnail">
							<img src="assets/img/narnia.jpg" alt="Narnia book cover" class="book-img">
						</div>
							<p class="book-title">The Chronicles of Narnia</p>
							<p class="price">PHP 1100.00 <small>PHP 1200</small></p>
							<p class="save-price">Save PHP 100.00</p>
							<button class="btn btn-primary basket-btn">Add to Basket</button>
						
					</div> 

				</div> <!-- ./row -->
			</div> <!-- ./panel-body -->
		</div> <!-- ./panel -->
	

	</div> <!-- ./container -->





<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>