<?php

//Nested If
$userName = "rana";
$password = 1234;

if($userName == "jahid"){
    if($password == 1234){
        echo "Login Success.";
    }else{
        echo "Invalid Password.";
    }
}else{
    echo "Invalid Username.";
}

echo "<br><br>";



//if else if.
if($userName == "jahid" && $password == 1234){
    echo "Login seccess.";
}
else if($userName == "jahid"){
    echo "Invalid Password.";
}
else if($password == 1234){
    echo "Invalid Username.";
}
else{
    echo "Invalid Username or Password.";
}
?>