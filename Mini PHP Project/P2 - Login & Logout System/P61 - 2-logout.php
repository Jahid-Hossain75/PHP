<?php 
    session_start();
    session_destroy();
    header('location: P61 - Session Works Like logout System.php');
?>