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

include 'partials/foot.php';

include 'partials/footer.php';

?>