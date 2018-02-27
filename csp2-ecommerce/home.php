<?php

// session_start();

$page_title = 'Home';

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

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a href="#">Fiction</a></h4>
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


	</div>

<?php

include 'partials/footer.php'

?>