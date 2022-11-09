<?php

require('P41 - Database Connect php.php');
$sql = "UPDATE mytable SET Heading='7nd heading', Category='book7', Details='book name is book7' WHERE id=434584";

// $result = mysqli_query($conn, $sql);
$result = $conn->query($sql);
if($result){
    echo 'Data update successful!';
}else{
    echo 'Data not update!';
}

?>