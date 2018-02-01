<?php
session_start();

if(!isset($_SESSION['current_user'])) {
	header('location: login.php');
}
function getTitle() {
	echo 'My Cart Page';
}
include 'partials/head.php';

$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

?>
</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">
		<h1>My Cart Page</h1>
		
		<?php
		 //		var_export($_SESSION['cart']);

		$amount_per_item = 0;
		$quantity_per_item = 0;
		$subtotal = 0;
		$total = 0;

		foreach ($_SESSION['cart'] as $key => $value) {
			# code..
			
			$quantity = $value;
			echo '<div class="item-parent-container form-group">
				<a href="item.php?id='. $items[$key]['id'] .'">
				<div class="item-container">
					<h3>' . (int)$value .' '.$items[$key]['name'].'</h3>
					<img src="'.$items[$key]['image'].'" alt="Mock data">
					<p>PHP '.$items[$key]['price'].'</p>
					<p>'.$items[$key]['description'].'</p>
				</div>  <!-- /.item-container -->
				</a>
				<input id="itemQuantity'. $items[$key]['id'] .'" type="number" value="'. (int)$value .'" min="0">
			';
			$amount_per_item = $items[$key]['price'];
			$subtotal = $quantity * $amount_per_item;
			echo '<p>Subtotal: PHP '. $subtotal .'</p>';
			$total += $subtotal;
			echo '</div>';

			echo '
			<button class="deleteItemCart" type="button" class="btn btn-danger" data-toggle="modal"  data-target="#deleteItemCartModal">Delete</button>
			';

			echo '
			<div id="deleteItemCartModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <form method="POST" action="assets/delete_item_cart.php">
			    	<input hidden name="product-id" value="'. $items[$key]['id'].'">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Delete Item</h4>
				      </div>
				      <div id="deleteItemCartModalBody" class="modal-body">
				      	<p>Do you really want to delete this item on your cart?'. $items[$key]['id'] .'</p>
						<div class="item-container">
							<h3>' . (int)$value .' '. $items[$key]['name'] .'</h3>
							<img src="'. $items[$key]['image'] .'" alt="Mock data">
							<p>PHP '.$items[$key]['price'].'</p>
							<p>'.$items[$key]['description'].'</p>
						</div>  <!-- /.item-container -->
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-danger">Yes</button>
				        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				      </div>
				    </div>
			    </form>

			  </div>
			</div>
			';
		
		}

		echo '<h3>The total amount to purchase is PHP '. $total .'</h3>';
		?>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


<?php

include 'partials/foot.php';

?>

</body>
</html>