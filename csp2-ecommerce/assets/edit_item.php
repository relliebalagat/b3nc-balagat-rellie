<?php

require '../mysqli_connect.php';

$id = $_GET['id'];

$query = "SELECT b.id, b.title, b.price, b.quantity, b.description, a.first_name, a.last_name, g.type FROM books b JOIN genres g ON b.genre_id = g.id JOIN authors a ON b.author_id = a.id WHERE b.id={$id} LIMIT 1";

$result = @mysqli_query(db_connect(), $query);

if(mysqli_num_rows($result) == 1) {

	$item = mysqli_fetch_assoc($result);

	echo '           
		<div class="form-group">
			
			<label>Book Title</label>
			<input type="text" name="booktitle" class="form-control" value="'. $item['title'].'">

			<label>Author First Name</label>
			<input type="text" name="firstname" class="form-control" value="' . $item['first_name'] .'">

			<label>Author Last Name</label>
			<input type="text" name="lastname" class="form-control" value="'. $item['last_name'] .'">

			<label>Book Description</label>
			<textarea name="description">' . $item['description'] . '</textarea>

			<label>Quantity</label>
			<input type="number" name="quantity" class="form-control" value="' . $item['quantity'] . '">

			<label>Genre</label>
			<input type="text" name="genre" class="form-control" value="' . $item['description'] . '">

			<label>Price</label>
			<input type="number" name="price" class="form-control" value="' . $item['price'] . '">
			<input hidden name="book_id" value="'. $item['id'] .'">
		</div>             
	';
}

//