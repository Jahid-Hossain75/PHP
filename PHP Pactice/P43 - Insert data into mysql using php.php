<?php

// connction php file,
require('P41 - Database Connect php.php');
// Data insert
$sql = "INSERT INTO mytable(Heading, Category, Details)
VALUES('7th heading', 'book7', 'book name is book7.')";

$result = mysqli_query($conn, $sql);
// using loop
if($result){
    echo 'Data inserted successful!';
}else{
    echo 'Data not inserted!';
}

?>