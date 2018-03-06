<?php

$page_title = 'Collections';

include 'partials/header.php';

require 'mysqli_connect.php';

// Query to view the fiction books
$query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b";
// result of query for fiction books
$result = mysqli_query(db_connect(), $query) or die(mysqli_error(db_connect()));

?>
</head>
<body>

	<?php

	include 'partials/navigation.php';
	include 'partials/searchbox.php';

	?>

	<div class="container">
		<div class="collections">
			<h2 class="text-center">Collections</h2>

			<div class="row">
				<div class="col-lg-12">
					<ul class="nav nav-tabs nav-justified">
						<li><a href="#">Fiction</a></li>
						<li><a href="#">Non fiction</a></li>
						<li><a href="#">Children's Book</a></li>
						<li><a href="#">Textbook</a></li>
					</ul>

				</div>
			</div>

			<div class="panel panel-default">
				
				<div class="panel-body">
					<?php

					if($result) {
						if(mysqli_num_rows($result) > 0) {
							echo '<div class="row">';
							while ($item = mysqli_fetch_assoc($result)) {
								echo '
									<div class="col-lg-3 col-md-6">
										<div class="thumbnail">
											<img src="' . $item['image'] . '" alt="The Lord of the rings book cover" class="book-img">
										</div>
											<p class="book-title"><a href="item.php?id='. $item['id'] .'">'.$item['title'].'</a></p>
											<p class="price">PHP '.$item['price'].'</p>
											<button class="btn btn-primary basket-btn" onclick="addToCart(' . $item['id'] . ')">Add to Basket</button>
									</div>
								';
							}
							echo '</div>';

						}
					}

					mysqli_close(db_connect());

					?>
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->
	
			</div> <!-- ./row -->
		</div> <!-- ./collections -->
	</div> <!-- ./container -->

	
	<script type="text/javascript">
	
		// onload and onerror


		var xhttp = false;

		if(window.XMLHttpRequest) {
			xhttp = new XMLHttpRequest();
		} else if (window.ActiveXObject) {
			xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		function addToCart(itemID) {
			if(xhttp) {
				// var obj = document.getElementById('cart');
				xhttp.open("GET", 'assets/add_to_cart.php?id=' + itemID, true);
			}

			xhttp.onreadystatechange = function () {
				if(xhttp.readyState == 4 && xhttp == 200) {
					// obj.innerHTML = xhttp.responseText;
				} else {
					alert("Cannot process request");
				}
			}

			xhttp.send(null);
		}




		//-----------------------
		function handleSuccess(data) {
		}
		function handleError() {
		}
		var req = new XMLHttpRequest();
		method = 'GET'; // POST
		url = ''; // PHP end point
		req.open(method, url, true);
		req.onload = handleSuccess;
		req.onerror = handleError;
		req.send();
		//-----------------------
	</script>




<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>