<?php

// || Or Operators.
$first_name = "Jahid";
$last_name = "Hossain";

echo ("<h4>Or Operators. </h4>");
if($first_name == "Jahid" || $last_name == "sakib"){
    echo ("Same value.");
}
else{
    echo ("Others name.");
}
echo "<br>";



// || Or Operators.
if($first_name == "Rana" || $last_name == "sakib"){
    echo ("Same value.");
}
else{
    echo ("Others name.");
}
echo "<br><br><br>";












// && And Operators.
echo ("<h4>And Operators. </h4>");
$userName = "jahid";
$password = 1234;
if($userName == "jahid" && $password == 1234){
    echo ("Login Successfully");
}
else{
    echo ("Login Faild.");
}
echo "<br>";


// && And Operators.
if($userName == "rana" && $password == 1234){
    echo ("Login Successfully");
}
else{
    echo ("Login Faild.");
}
echo "<br><br>";



// && And Operators.
$amount = 1500;
if($amount >= 1500 && $amount <= 2000){
    echo ("$amount is between 1500 to 2000");
}
else if($amount >= 1200 && $amount <= 1499){
    echo ("$amount is between 1200 to 1499");
}
else{
    echo "None";
}
echo "<br><br><br>";













// ! Not Operators.
echo ("<h4>Not Operators. </h4>");

$user_name = "jahid_3888";
$user_length = strlen($user_name);

if(!($user_length >= 5 && $user_length <= 7)){
    echo "Invalid Username.";
}
else{
    echo "Valid Username.";
}



?>