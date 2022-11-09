<?php
    $err = '';
    if(isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['conpassword']) ){
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $conpassword = $_GET['conpassword'];
        if(empty($username) && empty($email) && empty($password) && empty($conpassword)){
            $err = 'Fill up field';
        }else{
            echo "Successfully";
        }
    }
?>




<h4>Form Design and output</h4>
<form action=" <?php $_SERVER['PHP_SELF'] ?> " method="GET">
    Name: <input type="text" name="username"><br><br>
    Email: <input type="email" name="email" id=""><br><br>
    Password: <input type="password" name="password" id=""><br><br>
    Com-Password: <input type="password" name="conpassword" id=""><br><br>
    <input type="submit" value="submit">
</form>



<?php
    if(isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['conpassword'])){
        if(empty($_GET['username'] && $_GET['email'] && $_GET['password'] && $_GET['conpassword'])){
            echo 'Fill up the filed';
        }else{
            echo $_GET['username']."<br>";
            echo $_GET['email']."<br>";
            echo $_GET['password']."<br>";
            echo $_GET['conpassword']."<br>";
        }
    }
?>