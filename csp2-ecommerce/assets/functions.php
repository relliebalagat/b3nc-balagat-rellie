<?php

function collections_query($type, $limit) {
	$dbconn = db_connect();
	// Query to view the fiction books
	$query = "SELECT b.id, b.title, b.price, b.image, b.description FROM books b JOIN genres g ON b.genre_id = g.id WHERE g.type = '$type' LIMIT {$limit}";

	// result of query for fiction books
	$result = mysqli_query($dbconn, $query) or die(mysqli_error($dbconn));
	return $result;
}