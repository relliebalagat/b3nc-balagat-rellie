<?php
session_start();

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
						$query = "SELECT  b.id, b.title, b.price, b.image, b.description, a.first_name, a.last_name FROM books b INNER JOIN authors a ON b.author_id=a.id  WHERE b.id = {$id}";
						$result = @mysqli_query(db_connect(), $query);
						if(mysqli_num_rows($result) == 1) {

							$item = mysqli_fetch_assoc($result);
							echo '
								<div class="img-container">
									<img src="' . $item['image'] . '" class="center-block">
								</div>
								<div class="content">
									<h3 class="text-center">' . $item['title'] . '</h3>
									<p class="text-center">' . $item['first_name'] . " " . $item['last_name'] . '</p>
									<p class="item-description">'. $item['description'] .'</p>
									<p class="price">PHP '. $item['price'] .'</p>
									<p><i class="fas fa-rocket"></i>FREE DELIVERY WORLDWIDE</p>
									<p><a href="#"><i class="fas fa-clock"></i>Check Order Arrival</a></p>
									<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
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

				
				$random_query = "SELECT b.id, b.title, b.price, b.image FROM books b ORDER BY RAND() LIMIT 4";
				$result = @mysqli_query(db_connect(), $random_query);
				
				if(mysqli_num_rows($result) > 0) {
					for ($i=0; $i < 4; $i++) { 
						$collection = mysqli_fetch_assoc($result); 
						echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<a href="item.php?id='. $collection['id'] .'"><img src="'. $collection['image'] .'" alt="'.$collection['title'].'cover" class="book-img"></a>
								</div>
									<p class="book-title"><a href="#">'. $collection['title'] .'</a></p>
									<p class="price">'. $collection['price'] .'</p>
									<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
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

	<script type="text/javascript">
		
		function addToCart(value) {
			
			var xhttp = new XMLHttpRequest();
			
			xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    document.getElementById("noItemCart").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "assets/add_to_cart.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("itemid=" + value);
		}

	</script>



<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>