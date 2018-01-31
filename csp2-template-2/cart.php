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
		$amount_per_item = 0;
		$quantity_per_item = 0;
		$subtotal = 0;
		$total = 0;

		foreach ($_SESSION['cart'] as $key => $value) {
			# code..
			$number = $key;
			
			foreach ($items as $key => $item) {
				if($key === $items[$number]['id']) {
					$quantity = $value;
					echo '<div class="item-parent-container form-group">
						<a href="item.php?id='. $item['id'] .'">
						<div class="item-container">
							<h3>' . (int)$value .' '.$item['name'].'</h3>
							<img src="'.$item['image'].'" alt="Mock data">
							<p>PHP '.$item['price'].'</p>
							<p>'.$item['description'].'</p>
						</div>  <!-- /.item-container -->
						</a>
						<input id="itemQuantity'. $item['id'] .'" type="number" value="'. (int)$value .'" min="0">
					';
					$amount_per_item = $item['price'];
					$subtotal = $quantity * $amount_per_item;
					echo '<p>Subtotal: PHP '. $subtotal .'</p>';
					$total += $subtotal;
					echo '</div>';
				}
			}
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