<?php

if(isset($_POST['submit'])){
    $data = $_POST['username'];
    // remove the html tag using htmlspecialchars function
    $data = htmlspecialchars($_POST['username']);
    // remove the space, koma, etc using trim function
    $data = trim($data);
    // remove the slashes using stripslashes function
    echo stripslashes($data);
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    UserName: <br>
    <input type="text" name="username"><br><br>
    Password: <br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Submit" name="submit">
</form>