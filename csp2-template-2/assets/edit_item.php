<?php

$id = $_GET['id'];
// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

echo '
<div>
	<label>Product Name</label>
	<input class="form-control" name="product-name" type="text" value="'.$items[$id]['name'].'">

	<label>Description</label>
	<input class="form-control" name="description" type="text" value="'.$items[$id]['description'].'">

	<label>Image</label>
	<input class="form-control" name="image" type="file" value="'.$items[$id]['image'].'">

	<label>Price</label>
	<input class="form-control" name="price" type="number" value="'.$items[$id]['price'].'">
';

$categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5', 'Category 6'];

echo'
	<label>Role</label>
	<select class="form-control">';
		foreach($categories as $key => $category) {
			if ($items[$id]['category'] === $category) {
				echo '<option selected>'. $category .'</option>';
			} else {
				echo '<option>'. $category .'</option>';
			}
		}
	echo '
	</select>
</div>
';