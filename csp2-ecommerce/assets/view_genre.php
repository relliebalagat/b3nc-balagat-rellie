<?php

require '../mysqli_connect.php';

$genre = $_GET['genre'];

switch ($genre) {
	case 'nonfiction':
		$query_parameter = "non fiction";
		break;
	case 'childrensbook':
		$query_parameter = "children book";
		break;
	case 'textbook':
		$query_parameter = "textbook";
		break;
	default:
		$query_parameter = "fiction";
		break;
}

if(isset($_GET['genre'])) {

	$query = "SELECT b.id, b.title, b.price, b.quantity, a.first_name, a.last_name, g.type FROM books b JOIN genres g ON b.genre_id = g.id JOIN authors a ON b.author_id = a.id WHERE g.type = \"{$query_parameter}\" ORDER BY b.id";

	$result = @mysqli_query(db_connect(), $query);

	if(mysqli_num_rows($result) > 0) {
		echo '
			<table class="table table-striped">
				<thead>
					<tr>
						<td>#</td>
						<td>Title</td>
						<td>Author</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
				</thead>
			';
		while ($item = mysqli_fetch_assoc($result)) {
			echo '
				<tr class="table-striped">
					<td>' . $item['id'] .'</td>
					<td>' . $item['title'] .'</td>
					<td>' . $item['first_name'] . " " . $item['last_name'] . '</td>
					<td>P ' . $item['price'] .'</td>
					<td>' . $item['quantity'] .'</td>
					<td class="text-center"><a data-toggle="modal" data-target="#editModal" onclick="editItem(' . $item['id'] . ')">Edit</a></td>
					<td class="text-center"><a data-toggle="modal" data-target="#deleteModal" onclick="deleteItem(' . $item['id'] . ')">Delete</a></td>
				</tr>
			';
		}
		echo '</table>';
	}

}

// mysqli_close();