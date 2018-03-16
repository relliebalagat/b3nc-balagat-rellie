<?php

session_start();

$page_title = 'Collections';

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
		<div class="collections">
			<h2 class="text-center">Collections</h2>

			<div class="row">
				<div class="col-lg-12">
					<ul class="nav nav-tabs nav-justified">
						<li><button class="collections-btn btn" onclick="viewGenre('0')">All</button></li>
						<li><button class="collections-btn btn" onclick="viewGenre('1')">Fiction</button></li>
						<li><button class="collections-btn btn" onclick="viewGenre('2')">Non Fiction</button></li>
						<li><button class="collections-btn btn" onclick="viewGenre('3')">Children Book</button></li>
						<li><button class="collections-btn btn" onclick="viewGenre('4')">Textbook</button></li>
					</ul>

				</div>
			</div>

			<div class="panel panel-default" >


				<div class="panel-body" id="viewCollections">
					
					<div class="collections-message">
						<h3 class="text-center">CHECK OUR BOOKS NOW</h3>
					</div>
	
				</div> <!-- ./panel-body -->
			</div> <!-- ./panel -->
	
			</div> <!-- ./row -->
		</div> <!-- ./collections -->
	</div> <!-- ./container -->

	<!-- <div class="modal fade" id="addToCartMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
				<?php

				// echo $_SESSION;

				?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

 -->





	<script type="text/javascript">

		
		function viewGenre(number) {
            var xhttp = new XMLHttpRequest()
            var url = "assets/view_collections.php?id=" + number;

            xhttp.open("GET", url, true);
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    document.getElementById("viewCollections").innerHTML = this.responseText;                    
                }
            };
            
            xhttp.send();
		}

		function addToCart(itemId) {
			var xhttp = new XMLHttpRequest();
			var url = "asset/add_to_cart.php";
			var quantity = 1;
			var display = document.getElementById("countCart");

			xhttp.onreadystatechange = function() {
				if(xhttp.readyState == 4 && xhttp.status == 200) {
					display.innerHTML = this.responseText;
				}
			}
			xhttp.open("POST", url, true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("item_id=" + itemId);
		}

	</script>


<?php

include 'partials/foot.php';

include 'partials/footer.php';

?>