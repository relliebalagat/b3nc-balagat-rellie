<?php

session_start();

if(isset($_SESSION['current_user'])) {
	if($_SESSION['role'] != 'admin') {
		header('location: home.php');
	}
}


function getTitle() {
	echo 'Item Page';
}

include 'partials/head.php';

?>
</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">
		<h1>Item Page</h1>

		<?php

		$id = $_GET['id'];

		$file = file_get_contents('assets/items.json');
		$items = json_decode($file, true);

		?>
		<table>
			<tr>
				<th>Product Name</th>
				<td><?php echo $items[$id]['name']; ?></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><img src="<?php echo $items[$id]['image']; ?>" alt="Mock Image of Beer"></td>

			</tr>
			<tr>
				<th>Price</th>
				<td><?php echo $items[$id]['price']; ?></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><?php echo $items[$id]['description']; ?></td>
			</tr>
			<tr>
				<th>Category</th>
				<td><?php echo $items[$id]['category']; ?></td>
			</tr>
		</table>
		
		<a href="catalog.php"><button class="btn btn-default">Back</button></a>
		<button class="btn btn-primary">Edit</button>
		<button class="btn btn-danger">Delete</button>
	</main>


	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


<?php

include 'partials/foot.php';

?>

</body>
</html>