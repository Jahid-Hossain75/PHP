<?php

require('P41 - Database Connect php.php');

if(isset($_POST['cus_name']) && isset($_POST['cus_contact']) && isset($_POST['cus_address'])){
    $cus_name = $_POST['cus_name'];
    $cus_contact = $_POST['cus_contact'];
    $cus_address = $_POST['cus_address'];

    $data_insert = "INSERT INTO customer(customer_name, customer_contact, customer_address) VALUES('$cus_name', '$cus_contact', '$cus_address')";

    if(mysqli_query($conn, $data_insert)){
        echo 'Data Inserted Successful!';
    }else{
        echo 'Data Not Inserted!';
    }
}

?>


<form action="P47 - Insert Data From into MySql.php" method="post">
    Name: <input type="text" name="cus_name" id=""><br><br>
    Contact: <input type="text" name="cus_contact" id=""><br><br>
    Address: <input type="text" name="cus_address" id=""><br><br>
    <input type="submit" value="Submit" name="submit">
</form>