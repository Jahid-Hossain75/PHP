<?php

// Connect database connection file.php
require('P41 - Database Connect php.php');

// All data select -- & mysql table
$sql = "SELECT * FROM mytable";
// Connection OOP query
// $result = $conn->query($sql);
$result = mysqli_query($conn, $sql);

// using loop
if($result){
    while($data = mysqli_fetch_assoc($result)){
        echo "<strong>".$data['Heading'].'</strong><br>';
        echo $data['Category'].'<br>';
        echo $data['Details'].'<br>';
        echo '<br><br>';
    }
}

?>