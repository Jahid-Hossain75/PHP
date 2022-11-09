<?php

//using if else.
$user = " ";
$age = 10;
if($age > 18){
    $user = "Admin";
}else{
    $user = "Member";
}
echo $user;
echo "<br>";





//Ternary operators
$user1 = "";
$age1 = 15;
$user1 = ($age1 > 18) ? "Admin" : "Guest";
echo $user1;





?> 