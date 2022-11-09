<?php

// hostname
$hostName = 'localhost';
// username
$username = 'root';
//password
$password = '';
// database name
$databaseName = 'jahid';

$conn = new mysqli($hostName, $username, $password, $databaseName);
// $conn = mysqli_connect($hostName, $username, $password, $databaseName);

// using loop and check the connection
if($conn-> connect_error){
    die("Connection failed.".$conn->connect_error);
}
// echo "connection successful!";


?>
