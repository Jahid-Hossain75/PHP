<?php
    session_start();
    if($_SESSION['username'] == true){
        if((time() - $_SESSION['current_time']) > 10){
            header('location: P62 - Logout Automatically after 5 minutes.php');
        }else{
            echo "welcome to ". $_SESSION['username'];
        }
    }else{
        header('location: P62 - Logout Automatically after 5 minutes.php');
    }


?>
<br>
<a href="logout.php">Log Out</a>