<?php

$page_title = 'About Us';

include 'partials/header.php';
require 'mysqli_connect.php';

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

						<?php

						$id = $_GET['id'];
						$query = "SELECT  b.id, b.title, b.price, b.image, b.description FROM books b WHERE b.id = {$id}";
						$result = @mysqli_query(db_connect(), $query);
						if(mysqli_num_rows($result) == 1) {

							$item = mysqli_fetch_assoc($result);
							echo '
								<div class="img-container">
									<img src="' . $item['image'] . '" class="center-block">
								</div>
								<div class="content">
									<h3 class="text-center">' . $item['title'] . '</h3>
									<p class="text-center">Author</p>
									<p class="item-description">'. $item['description'] .'</p>
									<p class="price">PHP '. $item['price'] .'</p>
									<p><i class="fas fa-rocket"></i>FREE DELIVERY WORLDWIDE</p>
									<p><a href="#"><i class="fas fa-clock"></i>Check Order Arrival</a></p>
									<button class="btn btn-primary basket-btn">Add to Basket</button>
									<button class="btn btn-default">Add to Wishlist</button>
								</div> <!-- ./content -->
							';
						}

						?>
					</div> <!-- ./panel -->
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
				
				<?php 

				for($i = 1; $i <= 4; $i++) {
					
					$random_id = rand(1, 20);	
					
					
					$random_query = "SELECT b.id, b.title, b.price, b.image FROM books b WHERE b.id = {$random_id}";
					$result = @mysqli_query(db_connect(), $random_query);
					
					if(mysqli_num_rows($result) == 1) {
						$collection = mysqli_fetch_assoc($result); 
						echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<a href="item.php?id='. $collection['id'] .'"><img src="'. $collection['image'] .'" alt="The Lord of the rings book cover" class="book-img"></a>
								</div>
									<p class="book-title"><a href="#">'. $collection['title'] .'</a></p>
									<p class="price">'. $collection['price'] .'</p>
									<button class="btn btn-primary basket-btn">Add to Basket</button>
							</div>
						';
					}
				

				}			
		
				mysqli_close(db_connect());
		
				?>

				</div> <!-- ./row -->
			</div> <!-- ./panel-body -->
		</div> <!-- ./panel -->
	

	</div> <!-- ./container -->





<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>