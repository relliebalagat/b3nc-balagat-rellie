<?php

require '../mysqli_connect.php';

$query = "SELECT b.id, b.title, b.price, b.quantity, a.first_name, a.last_name, g.type FROM books b JOIN genres g ON b.genre_id = g.id JOIN authors a ON b.author_id = a.id ORDER BY b.id";

$result = mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) > 0) {
	echo '
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Title</td>
					<td>Author</td>
					<td>Genre</td>
					<td>Price</td>
					<td>Quantity</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</thead>
		';
	while ($item = mysqli_fetch_assoc($result)) {
		echo '
			<tr>
				<td class="title">' . $item['title'] .'</td>
				<td>' . $item['first_name'] . " " . $item['last_name'] . '</td>
				<td>' . $item['type'] . '</td>
				<td class="price-width">P <span class="right">' . number_format($item['price'], 2) .'</span></td>
				<td class="text-center">' . $item['quantity'] .'</td>
				<td class="text-center"><a data-toggle="modal" data-target="#editModal" onclick="editItem(' . $item['id'] . ')">Edit</td>
				<td class="text-center"><a data-toggle="modal" data-target="#deleteModal" onclick="deleteItem(' . $item['id'] . ')">Delete</td>
			</tr>
		';
	}
	echo '</table>';
}
//
// mysqli_close();