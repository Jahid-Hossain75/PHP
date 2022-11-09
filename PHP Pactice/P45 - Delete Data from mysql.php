<?php

require('P41 - Database Connect php.php');
$sql = "DELETE FROM mytable WHERE id=434587";
$result = mysqli_query($conn, $sql);
if($result){
    echo 'Data Delete successful!';
}else{
    echo 'Data not Delete!';
}

?>