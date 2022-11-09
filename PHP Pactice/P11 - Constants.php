<?php

// This is a function -- define()
define("NAME", "Md. Jahid Hossain"); //two parameters 1.name, 2.value
define("ID", 434575);

echo "My name is: ".NAME."<br>";
echo "My College id: ".ID."<br><br>";


//Create an Array Constant
define("CAR", [
    "Romeo",
    "BMW",
    "Toyata"
]);
echo "Car name: ".CAR[1]."<br><br>";


//Global Constants
define("GREETING", "Hi! I'm Jahid");

function mytest(){
    echo GREETING;
}
mytest();

?>