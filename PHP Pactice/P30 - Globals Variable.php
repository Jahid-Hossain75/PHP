<?php

// Globlas variable -- 1
echo "<h4>Globlas variable -- 1</h4>";
function info(){
    $GLOBALS['x'] = 25;
}
info();
echo "$x <br><br><br>";




//Globlas variable -- 2
echo "<h4>Globlas variable -- 2</h4>";
$x = 15;
$y = 15;
function info2(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
info2();
echo "$z <br><br><br>";




//Globlas variable -- 3 SERVER -- who file work
echo "<h4>Globlas variable SERVER -- 3</h4>";
echo "<b>Who file work: -- </b>";
echo $_SERVER['PHP_SELF'];
echo "<br><br>";




//Globlas variable -- 4 SERVER -- sarver name
echo "<b>Server name: -- </b>";
echo $_SERVER['SERVER_NAME'];
echo "<br><br>";




//Globlas variable -- 5 SERVER -- sarver IP address
echo "<b>IP Address: -- </b>";
echo $_SERVER['SERVER_ADDR'];
echo "<br><br>";




//Globlas variable -- 6 SERVER -- sarver software
echo "<b>Server Software: -- </b>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br><br>";




//Globlas variable -- 7 SERVER -- sarver host
echo "<b>Server Host: -- </b>";
echo $_SERVER['HTTP_HOST'];
echo "<br><br>";




//Globlas variable -- 8 SERVER -- sarver URL
echo "<b>Server URL: -- </b>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br><br>";




//Globlas variable -- 9 SERVER -- sarver request
echo "<b>Server Request: -- </b>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br><br><br><br>";




//Form design and using request
echo "<H4>Form design and using GET/POST method</H4>";
echo $_REQUEST['fname']."<br>";
// echo $_GET['fname']."<br>";
echo $_POST['fname']."<br>";

?>




<!-- form design and using GET/POST method  -->
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="fname"> <br>
    <input type="submit" value="submit">
</form>
<br><br><br><br><br>








<!-- form design and output -->
<h4>Form Design and output</h4>
<form action=" <?php $_SERVER['PHP_SELF'] ?> " method="POST">
    <input type="text" name="fname" placeholder="Enter your name"><br>
    <input type="email" name="email" id="" placeholder="Enter your email"><br>
    <input type="password" name="password" id="" placeholder="Enter Password"><br>
    <input type="password" name="confirmpassword" id="" placeholder="Confirm Password"><br>
    <input type="submit" value="submit">
</form>


<?php
    echo $_REQUEST['fname']."<br>";
    echo $_REQUEST['email']."<br>";
    echo $_REQUEST['password']."<br>";
    echo $_REQUEST['confirmpassword']."<br>";
?>