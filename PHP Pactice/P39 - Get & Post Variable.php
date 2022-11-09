<?php

if(isset($_POST['username']) && isset($_POST['pass']) ){
    $username = $_POST['username'];
    $password = $_POST['pass'];
    if(!empty($username) && !empty($password)){
        if($username == 'Jahid' && $password == '1234'){
            echo 'Log in successful';
        }else{
            echo 'error Log in!';
        }
    }else{
        echo 'Fill up all fields';
    }
    
}

?>

<form action="P39 - Get & Post Variable.php" method="POST">
    Username: <input type="text" name="username" id=""><br><br>
    Password: <input type="password" name="pass" id=""><br><br>
    <input type="submit" value="Log in">
</form>
