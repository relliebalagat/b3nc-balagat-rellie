<?php

session_start();

if(!isset($_SESSION['user_id'])) {
	header('Location: index.php');
}

$page_title = 'Home';

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

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="message-board">
					
					<?php
					
					if(isset($_SESSION['first_name'])) {
						echo '
						
							<h2 class="text-center">Welcome, ' . $_SESSION['first_name'] . '</h2>

						';	
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
				$fq_result = collections_query('fiction', 4);

				if($fq_result) {
					if(mysqli_num_rows($fq_result) > 0) {
						while ($item = mysqli_fetch_assoc($fq_result)) {
							echo '
							<div class="col-lg-3 col-md-6">
								<div class="thumbnail">
									<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'] .'" class="book-img"></a>
								</div>
									<p class="book-title"><a href="items.php?id='.$item['id'].'">'. $item['title'] .'</a></p>
									<p class="price">P '. $item["price"] .'</p>
									<div class="item-process"> 
										<input type="number" class="form-control" id="itemCount'. $item['id'] .'" min="0" value="1">
										<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
								</div>		
							</div>';
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
										<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'] .'" class="book-img"></a>
									</div>
										<p class="book-title"><a href="items.php?id='.$item['id'].'">'. $item['title'] .'</a></p>
										<p class="price">P '. $item["price"] .'</p>
										<div class="item-process"> 
											<input type="number" class="form-control" id="itemCount'. $item['id'] .'" min="0" value="1">
											<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
									</div>		
								</div>';
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
									<a href="item.php?id='.$item['id'].'"><img src="'.$item['image'].'" alt="'. $item['description'] .'" class="book-img"></a>
								</div>
									<p class="book-title"><a href="items.php?id='.$item['id'].'">'. $item['title'] .'</a></p>
									<p class="price">P '. $item["price"] .'</p>
									<div class="item-process"> 
										<input type="number" class="form-control" id="itemCount'. $item['id'] .'" min="0" value="1">
										<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
								</div>		
							</div>';
						}
					}
				}

				?>

					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->


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
									<p class="price">P '. $item["price"] .'</p>
									<div class="item-process"> 
										<input type="number" class="form-control" id="itemCount'. $item['id'] .'" min="0" value="1">
										<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
								</div>		
							</div>';
				
						}
					}
				}

				mysqli_close(db_connect());
				?>

					</div> <!-- ./row -->
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->

	</div>

	<script type="text/javascript">
		
		function addToCart(number) {

			var quantity = document.getElementById("itemCount" + number).value;
			var xhttp = new XMLHttpRequest();
			
			xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    document.getElementById("noItemCart").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "assets/add_to_cart.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("itemid=" + number + "&itemquantity=" + quantity);
			alert("An item has been added to your basket.");
		}

		function register() {
			alert("You must log in first");
		}


		
	</script>


<?php

include 'partials/footer.php';

include 'partials/foot.php';

?>