<?php

session_start();

require 'mysqli_connect.php';

$email = "";
$email = $_SESSION['email'];