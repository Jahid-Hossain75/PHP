<?php

//function -- 1
echo "<h4>Function-- 1</h4>";
function MyName(){
    echo "Jahid Hossain";
}
MyName();
echo "<br><br><br>";




//function -- 2
echo "<h4>Function-- 2</h4>";
function Age($age){
    echo $age;
}
Age(25);




//function -- 3
echo "<h4>Function-- 3</h4>";
function information($myName, $myAge){
    echo ("My Name is $myName <br>");
    echo ("My age $myAge years old.<br>");
}
information("Jahid", 22);




//function -- 4
echo "<h4>Function-- 4</h4>";
function add($a, $b){
    echo $a + $b;
}
add(5, 9);




//function -- 5
echo "<h4>Function-- 5</h4>";
function add2($a, $b){
    return $a + $b;
}
echo add2(5, 7);




//function -- 6
echo "<h4>Function-- 6</h4>";
function add3($a, $b){
    return $a + $b;
}
$c = 15 + add3(5, 7);
echo $c;

?>