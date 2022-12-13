
<form action="P61 - Session Works Like logout System.php" method="post">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="submit" value="Login" >
</form>


<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'jahid');
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $query = "SELECT * FROM login_check WHERE username = '$username' && passwords = '$password'";
        $sql = mysqli_query($con, $query);
        $row_count = mysqli_num_rows($sql);

        if($row_count){
            $_SESSION['username'] = $username;
            header('location: P61 - 1-welcome.php');
        }else{
            echo "Not Login!";
        }
    }
?>