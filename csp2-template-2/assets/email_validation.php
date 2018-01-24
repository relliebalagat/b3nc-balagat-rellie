<?php

$emailAdd = $_POST['emails'];

// processing
$file = file_get_contents('users.json');
$emails = json_decode($file, true);
$emailnames = [];

foreach ($emails as $user) {
	array_push($emailnames, $user['emails']);
}

if(isset($_POST['emails'])){
	$email_entered = $_POST['emails'];

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

