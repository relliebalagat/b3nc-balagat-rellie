<?php

session_start();
// header('refresh: 0');
session_destroy();

header('location: index.php');
