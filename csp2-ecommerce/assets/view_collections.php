<?php

require '../mysqli_connect.php';

$id = $_GET['id'];

if($id != 0) {

	$query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b INNER JOIN genres g ON b.genre_id = g.id WHERE g.id = '$id'";
	$result = mysqli_query(db_connect(), $query);

	if($result) {
		if(mysqli_num_rows($result) > 0) {
			echo '<div class="row">';
			while ($item = mysqli_fetch_assoc($result)) {
				echo '
					<div class="col-lg-3 col-md-6">
						<div class="thumbnail">
								<a href="item.php?id='.$item['id'].'"><img src="' . $item['image'] . '" alt="'.$item['title'].'cover" class="book-img"></a>
						</div>
						<input type="hidden" name="item_id" value="'. $item['id'] .'">
						<p class="book-title"><a href="item.php?id='. $item['id'] .'">'.$item['title'].'</a></p>
						<p class="price" name="price">PHP '.$item['price'].'</p>
						<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
					</div>
				';
			}
			echo '</div>';
		}
	}
	
} else {

	// Query to view the fiction books
	$query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b";
	// result of query for fiction books
	$result = mysqli_query(db_connect(), $query) or die(mysqli_error(db_connect()));

	if($result) {
		if(mysqli_num_rows($result) > 0) {
			echo '<div class="row">';
			while ($item = mysqli_fetch_assoc($result)) {
				echo '
					<div class="col-lg-3 col-md-6">
						<div class="thumbnail">
								<a href="item.php?id='.$item['id'].'"><img src="' . $item['image'] . '" alt="'.$item['title'].'cover" class="book-img"></a>
						</div>		
						<input type="hidden" name="item_id" value="'. $item['id'] .'">
						<p class="book-title"><a href="item.php?id='. $item['id'] .'">'.$item['title'].'</a></p>
						<p class="price" name="price">PHP '.$item['price'].'</p>
						<button type="submit" class="btn btn-primary basket-btn" onclick="addToCart('.$item['id'].')">Add to Basket</button>
					</div>
				';
			}
			echo '</div>';

		}
	}
}

mysqli_close(db_connect());