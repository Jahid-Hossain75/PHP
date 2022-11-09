<?php

require('P41 - Database Connect php.php');

$sql = "SELECT Email, FirstName FROM users";

$result = mysqli_query($conn, $sql);

if($result){
    while($data = mysqli_fetch_assoc($result)){
        $email = $data['Email'];
        $firstname = $data['FirstName'];
        echo 'Name: '. $firstname.'<br>';
        echo 'Email: '.$email.'<br><br>';
    }
}

?>