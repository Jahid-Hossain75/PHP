<?php

require('P41 - Database Connect php.php');

$sql = "SELECT * FROM customer";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)){
    $custo_name = $data['Customer_name'];
    $custo_contact = $data['Customer_contact'];
    $custo_address = $data['Customer_address'];
    $id = $data['Customer_id'];

    echo 'Name: '.$custo_name.
    ' | Contact: '.$custo_contact.
    ' | Address: '.$custo_address.
    ' <a href="P48 - Edit.php?id='.$id.'">Edit</a> <br>';
}

?>
