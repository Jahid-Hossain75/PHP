<?php

require('P41 - Database Connect php.php');

$get_id = $_GET['id'];
$sql = "SELECT * FROM customer WHERE Customer_id = '$get_id'";

$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

$custo_id = $data['Customer_id'];
$custo_name = $data['Customer_name'];
$custo_contact = $data['Customer_contact'];
$custo_address = $data['Customer_address'];

if(isset($_POST['cus_name']) && isset($_POST['cus_contact']) && isset($_POST['cus_address']) && isset($_POST['id'])){
    $custo_id = $_POST['id'];
    $custo_name = $_POST['cus_name'];
    $custo_contact = $_POST['cus_contact'];
    $custo_address = $_POST['cus_address'];

    $data_update = "UPDATE customer SET Customer_name = '$custo_name', Customer_contact = '$custo_contact', Customer_address = '$custo_address' WHERE Customer_id = '$custo_id'";

    if(mysqli_query($conn, $data_update)){
        echo 'Data Update Successful!';
    }else{
        echo 'Data Not Update!';
    }
}
?>


<form action="P48 - Edit.php" method="post">
    <input type="text" name="id" id="" value="<?php echo $custo_id ?>" hidden><br><br>
    Name: <input type="text" name="cus_name" id="" value="<?php echo $custo_name ?>"><br><br>
    Contact: <input type="text" name="cus_contact" id="" value="<?php echo $custo_contact ?>"><br><br>
    Address: <input type="text" name="cus_address" id="" value="<?php echo $custo_address ?>"><br><br>
    <input type="submit" value="Submit" name="submit">
</form>