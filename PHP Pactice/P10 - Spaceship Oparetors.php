<?php

//Spaceship Oparetors

$x = 10;
$y = 12;
echo ($x <=> $y); //return -1 because $x is less than $y.
echo ("<br>");



$x = 13;
$y = 13;
echo ($x <=> $y); //return 0 because values are equal.
echo ("<br>");



$x = 15;
$y = 14;
echo ($x <=> $y); //return +1 because $x is greater than $y.
echo ("<br>");

?>