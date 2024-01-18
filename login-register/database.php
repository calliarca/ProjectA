<?php

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "dr49m3t0h377";
$dbName = "login_register";
$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);

if(!$conn){
    die("Something went wrong.");
}


?>
