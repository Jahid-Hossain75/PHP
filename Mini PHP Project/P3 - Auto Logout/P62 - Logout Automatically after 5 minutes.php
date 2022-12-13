<form action="P62 - Logout Automatically after 5 minutes.php" method="post">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <input type="submit" value="Login" name="submit">
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
            $_SESSION['current_time'] = time();
            header('location: welcome.php');
        }else{
            echo "Not Login!";
        }
    }


?>