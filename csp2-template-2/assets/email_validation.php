<?php

$emailAdd = $_POST['email'];

// processing
$file = file_get_contents('users.json');
$emails = json_decode($file, true);
$emailnames = [];

foreach ($emails as $user) {
	array_push($emailnames, $user['email']);
}

if(isset($_POST['email'])){
	$email_entered = $_POST['email'];

	if (!empty($email_entered)) {
		if(in_array($email_entered, $emailnames)){
			echo '<span class="red-message">not valid</span>';
		} else {
			echo '<span class="green-message">valid</span>';
		}
	}

}

# echo $username;
# var_dump($usernames);

