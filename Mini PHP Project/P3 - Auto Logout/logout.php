<?php
    session_start();
    session_destroy();
    header('location: P62 - Logout Automatically after 5 minutes.php');


?>