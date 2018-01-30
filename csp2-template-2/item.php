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
		
		<a href="catalog.php?category=<?php echo $items[$id]['category']; ?>&search="><button class="btn btn-default">Back</button></a>
		
		<button id="editItem" type="button" class="btn btn-info" data-toggle="modal"  data-target="#editItemModal" data-index="<?php echo $id; ?>">Edit</button>
		
		<button id="deleteItem" type="button" class="btn btn-danger" data-toggle="modal"  data-target="#deleteItemModal" data-index="<?php echo $id; ?>">Delete</button>
	</main>

	<!-- edit modal -->
	<div id="editItemModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <form method="POST" action="assets/update_item.php">
	    	<input hidden name="user-id" value="<?php echo $id; ?>">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit Item Details</h4>
		      </div>
		      <div id="editItemModalBody" class="modal-body">
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default">Save</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		      </div>
		    </div>
	    </form>

	  </div>
	</div>


	<!-- delete modal -->
	<div id="deleteItemModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <form method="POST" action="assets/delete_item.php">
	    	<input hidden name="product_id" value="<?php echo $id; ?>">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Delete Item</h4>
		      </div>
		      <div id="deleteItemModalBody" class="modal-body">
		      	<p>Do you really want to delete this item?</p>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-danger">Yes</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		      </div>
		    </div>
	    </form>

	  </div>
	</div>


	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		$(document).ready(function() {

			$('#editItem').click(function() {
				var itemId = $(this).data('index');

				$.get('assets/edit_item.php',
					{
						id: itemId
					},
					function(data, status) {
						$('#editItemModalBody').html(data);
				});
			});

			$('#deleteItem').click(function() {
				var itemId = $(this).data('index');

				$.get('assets/remove_user.php',
					{
						id: itemId
					},
					function(data, status) {
						$('#deleteItemModalBody').html(data);
				});
			});
		});
	</script>

</body>
</html>