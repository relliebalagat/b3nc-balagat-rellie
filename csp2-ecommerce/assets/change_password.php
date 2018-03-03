<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    require '../mysqli_connect.php';

    $password = false;

    echo $_POST['new_password'];
    echo $_POST['confirm_password'];

    if($_POST['new_password'] == $_POST['confirm_password']) {
        $password = mysqli_real_escape_string($dbconn, $_POST['new_password']);
    } else {
        echo "The password did not match";
    }

    if($password) {
        $query = "UPDATE users SET password=SHA1('$password') WHERE id={$_SESSION['user_id']} LIMIT 1";

        $result = mysqli_query($dbconn, $query);

        $rows = mysqli_affected_rows($dbconn);

        if(mysqli_affected_rows($dbconn) == 1) {
            header('location: ../home.php');
        }

    }

}