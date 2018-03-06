<?php

$page_title = 'My Cart';

include 'partials/header.php';

?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="container">
		<div class="row basket">
			<div class="col-lg-12">

				<h2 class="text-center">Your Basket</h2>

				<!-- Basket Details -->
				<div class="basket-details">
					<p class="text-center"><i class="fas fa-shopping-basket"></i> You have 0 item for a total of PHP 0.00 amount in your basket</p>
				</div>
				<div class="panel">
					<div class="basket-collections">
						<h4>Shopping basket details</h4>
						<hr>
						<div class="basket-item">
							<div class="img-container">
								<img src="assets/img/product-images/1984.jpg">
							</div> <!-- ./basket-item -->
							<div class="content">
								<h5>Title</h5>
								<p class="price">Total Price</p>
								<p>Author</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
							</div> <!-- ./content -->
							<div class="product-input">
								<label>Quantity</label>
								<select class="pull-right">
									<option class="text-center">1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<p class="price">Total Price</p>
								<button class="pull-right btn remove-btn">Remove</button>
							</div> <!-- ./product-input -->
						</div> <!-- ./basket-item -->
						<hr>
						<div class="basket-item">
							<div class="img-container">
								<img src="assets/img/product-images/1984.jpg">
							</div> <!-- ./basket-item -->
							<div class="content">
								<h5>Title</h5>
								<p class="price">Total Price</p>
								<p>Author</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
							</div> <!-- ./content -->
							<div class="product-input">
								<label>Quantity</label>
								<select class="pull-right">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<p class="price">Total Price</p>
								<button class="pull-right btn remove-btn">Remove</button>
							</div> <!-- ./product-input -->
						</div> <!-- ./basket-item -->
						<hr>
						<div class="basket-item">
							<div class="img-container">
								<img src="assets/img/product-images/1984.jpg">
							</div> <!-- ./basket-item -->
							<div class="content">
								<h5>Title</h5>
								<p class="price">Total Price</p>
								<p>Author</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
							</div> <!-- ./content -->
							<div class="product-input">
								<label>Quantity</label>
								<select class="pull-right">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<p class="price">Total Price</p>
								<button class="pull-right btn remove-btn">Remove</button>
							</div> <!-- ./product-input -->
						</div> <!-- ./basket-item -->

					</div> <!-- ./basket-collections -->
				</div> <!-- ./panel -->
				
				<!-- basket total -->
				<div class="panel">
					<div class="basket-total">
						<p class="text-center">Delivery Cost <span>FREE</span></p>
						<p class="price">Total <span>PHP 0.00</span></p>
						
						<button class="btn btn-primary basket-btn">Checkout</button>
						<button class="btn btn-primary text-center">Checkout with Paypal</button>	
					</div>
				</div>

			</div> <!-- ./col-lg-12 -->
		</div> <!-- ./row -->
	</div> <!-- ./container -->


<?php


include 'partials/footer.php';

include 'partials/foot.php';

?>