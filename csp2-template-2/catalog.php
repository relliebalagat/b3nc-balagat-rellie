<?php

session_start();

function getTitle() {
	echo 'Catalog';
}

include 'partials/head.php';

// import items.json file
$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

// var_dump($items);

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main id="catalogWrapper" class="wrapper">

		<h1>Catalog Page</h1>

		<a href="create_new_item.php">
			<button class="btn btn-primary">Add New Item</button>
		</a>
		<!-- <a href="assets/edit_item.php" id="editItem">
			<button class="btn btn-info">Edit Item</button>
		</a>
		<a href="">
			<button class="btn btn-danger">Delete Item</button>
		</a> -->
		

		<div class="items-wrapper">
			<?php

			foreach ($items as $key => $item) {
				echo '
					<div class="item-parent-container form-group">
						<a href="item.php?id='. $key .'">
						<div class="item-container">
							<h3>'.$item['name'].'</h3>
							<img src="'.$item['image'].'" alt="Mock data">
							<p>PHP '.$item['price'].'</p>
							<p>'.$item['description'].'</p>
						</div>  <!-- /.item-container -->
						</a>
						<button class="btn btn-primary form-control">Add to Cart</button>
						
					</div>
				';
			}

			?>
		</div>  <!-- /.items-wrapper -->
		
	</main>  <!-- /.wrapper -->


	


	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	


</body>
</html>