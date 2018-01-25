<?php

function getTitle() {
	echo 'Create New Item';
}

include 'partials/head.php';

?>
</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">
		<h1>Create New Item</h1>

		<form id="registerForm" method="POST" action="assets/createnewitem.php" class="form-group">
			<label for="item-name">Item name</label>
			<input type="text" name="itemname" id="itemname" placeholder="Enter item name" class="form-control" required>

			<label for="description">Description</label>
			<input type="text" name="description" id="description" placeholder="Enter product description" class="form-control" required>

			<label for="image">Image</label>
			<input type="file" name="image" id="image" placeholder="Enter image" class="form-control" required>	

			<label for="price">Price</label>
			<input type="number" name="price" id="price" placeholder="Enter price" class="form-control" required>	

			<label for="price">Category</label>
			<!-- <input type="number" name="price" id="price" placeholder="Enter price" class="form-control" required>	 -->
			<select name="category" class="form-control">
				<option selected>Category 1</option>
				<option>Category 2</option>
				<option>Category 3</option>
				<option>Category 4</option>
				<option>Category 5</option>
				<option>Category 6</option>
			</select>

			<input type="submit" name="submit" id="submit" value="Add Item" class="btn btn-primary">
		</form>


	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>


<?php

include 'partials/foot.php';

?>

<script type="text/javascript">
	// $('#username').keyup(function() {
	$('#username').on('input', function() {
		var usernameText = $(this).val();
		// console.log(usernameText);
		$.post('assets/username_validation.php', {username: usernameText}, function(data, status) {
			// console.log(data);
			$('[for="username"]').html(data);
		});
	});

	// password validation
	
	// $('#password').keypress(function() {
		
	// 	console.log(passWord);
	// })
	 

	$('#confirmPassword').on('input' , function() {
		var pw = $('#password').val()
		var cpw = $(this).val();

		// console.log(pw);
		// console.log(cpw);
		
		
		if(pw != '' && cpw != ''){
			if(pw !== cpw){
				//$('#validate').text('Password does not match');
				$('[for="password"]').html('Password <span class="red-message">mismatched</span>');
			} else {
				$('[for="password"]').html('Password <span class="green-message">matched</span>');
			}
		}

	});

	$('#email').on('input', function() {
		var emailText = $(this).val();
		// console.log(usernameText);
		$.post('assets/email_validation.php', {emailname: emailText}, function(data, status) {
			// console.log(data);
			$('[for="email"]').html(data);
		});
	});

</script>

</body>
</html>