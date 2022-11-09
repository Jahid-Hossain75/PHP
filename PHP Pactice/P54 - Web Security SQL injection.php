<?php
$conn = mysqli_connect('localhost', 'root', '', 'jahid');
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];
    // unknown user not login
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE FirstName='$firstname' AND Password='$password'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        echo 'Login Successful!';
    }else{
        echo 'Invalid!';
    }
}
?>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    UserName:<br>
    <input type="text" name="firstname"><br><br>
    Password: <br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login" name="submit">
</form>