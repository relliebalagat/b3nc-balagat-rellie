<?php

// Check for the form submission

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// database connection
	require '../mysqli_connect.php';
	
	$dbconnect = db_connect();

	$errors = array();

	if(empty($_POST['booktitle'])) {
		// $errors[] = 'You forgot to enter your FIRST Name.';
	} else {
		$book_title = mysqli_real_escape_string($dbconnect, trim($_POST['booktitle']));
	}

	if(empty($_POST['autfirstname'])) {
		// $errors[] = 'You forgot to enter your LAST Name.';
	} else {
		$aut_first_name = mysqli_real_escape_string($dbconnect, trim($_POST['autfirstname']));
	}

	if(empty($_POST['autlastname'])) {
		// $errors[] = 'You forgot to enter your Email Address.';
	} else {
		$aut_last_name = mysqli_real_escape_string($dbconnect, trim($_POST['autlastname']));
	}

	if(empty($_POST['description'])) {
		// $errors[] = 'You forgot to enter your Email Address.';
	} else {
		$book_description = mysqli_real_escape_string($dbconnect, trim($_POST['description']));
	}

	if(empty($_POST['quantity'])) {
		$errors[] = 'You forgot to enter your Email Address.';
	} else {
		$quantity = $_POST['quantity'];
	}

	if(empty($_POST['genre'])) {
		$errors[] = 'You forgot to enter your Email Address.';
	} else {
		$genre_id = $_POST['genre'];
	}


	if(empty($_POST['price'])) {
		// $errors[] = 'You forgot to enter your Email Address.';
	} else {
		$price = mysqli_real_escape_string($dbconnect, trim($_POST['price']));
	}

	if(empty($_POST['imagefile'])) {
		$errors[] = 'You forgot to enter your Email Address.';
	} else {
		$image_file = "assets/img/product-images/" . $_POST['imagefile'];
	}

	if(empty($errors)) {
		
		$query = "SELECT id FROM authors WHERE first_name='$aut_first_name' AND last_name='$aut_last_name'";
		$author_id_result = mysqli_query($dbconnect, $query);

		// to check if the author already exist. if not, proceed
		if(mysqli_num_rows($author_id_result) == 0) {
			echo "Author dont exist";
			
			// process first, inset author query
			$author_query = "INSERT INTO authors(first_name, last_name) VALUES('$aut_first_name', '$aut_last_name')";
			$author_result = mysqli_query($dbconnect, $author_query);
			$author_id = mysqli_insert_id($dbconnect);
			

			if($author_result) {
				
				// insert book query
				$book_query = "INSERT INTO books(title, author_id, genre_id, quantity, description, price, image) VALUES('$book_title', $author_id, $genre_id, $quantity, '$book_description', $price, '$image_file')";

				$book_result = mysqli_query($dbconnect, $book_query);

				if($book_result) {
					echo "Add item success";
				} else {
					echo "Add item not successfull";
				}

			} // if $author_result

			echo $book_query_1;

		} else {
			echo "Author ALREADY exist";
			
			$view = mysqli_fetch_assoc($author_id_result);
			$author_id_2 = $view['id'];

			if($author_id_result) {
				$book_query_2 = "INSERT INTO books(title, author_id, genre_id, quantity, description, price, image) VALUES('$book_title', $author_id_2, $genre_id, $quantity, '$book_description', $price, '$image_file')";

				$book_result = mysqli_query($dbconnect, $book_query_2);

				if($book_result) {
					echo "Add item success";
				} else {
					echo "Add item not successfull";
				}

			}

		} // if mysqli_num_rows($r) == 0

		mysqli_close($dbconnect); // close the database
		exit();

	} // empty($errors)

	mysqli_close($dbconnect);
	
} // if $_SERVER['REQUEST_METHOD'] == 'POST'




