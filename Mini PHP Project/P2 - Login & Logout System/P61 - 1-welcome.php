<?php
    session_start();
    if($_SESSION['username']== true){
        echo 'Welcome to '. $_SESSION['username'];
    }else{
        header('location: P61 - Session Works Like logout System.php');
    }
    
?>

<br>
<a href="P61 - 2-logout.php">Log Out</a>