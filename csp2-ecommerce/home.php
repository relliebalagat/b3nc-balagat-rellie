<?php

$page_title = 'Null Website';

include 'partials/header.php';

?>
</head>
<body>

	<?php
	include 'partials/navigation.php';
	?>

	<!-- searchbox -->
	<div>
		<form class="search-area">
			<div class="form-group">
				<select class="form-control">
					<option>By Keyword</option>
					<option>By Title</option>
					<option>By Author</option>
					<option>By ISBN</option>
				</select>
				<input type="text" class="form-control" placeholder="Search for books by keyword | title | author ">
				<button type="submit" class="btn btn-default">Submit</button>	
				<button type="submit" class="btn btn-default">Advanced Search</button>	
			</div>
		</form>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="message-board">
					<h2 class="text-center">Welcome, Your Name</h2>
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