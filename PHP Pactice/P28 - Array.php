<?php


//Indexed Arrays
echo "<h3>Indexed Arrays.</h3>";
$cars = array("BMW", "Volvo", "Toyota");
echo ("I like $cars[0], $cars[1], $cars[2]");

echo "<br><br><br><br>";


echo "<h3>Ind'exed Arrays -- using for loop.</h3>";
//Indexed Arrays -- using for loop.
$name = array("Jahid", "Hossain", "Rana", "Abid");
$arrlength = count($name);

for($x = 0; $x < $arrlength; $x++) {
//   echo $x.". " .$name[$x]. ", <br>";
echo ("$x. $name[$x], <br>");
}
echo "<br><br><br><br>";








//Associative Arrays.
echo "<h3>Associative Arrays. </h3>";
$age = array("Peter"=>"35", "Ben"=>"23", "Joe"=> "44");
echo "Peter is ".$age['Peter']." years Old.";



//Associative Arrays -- using Loop
echo "<h3>Associative Arrays Loop. </h3>";
$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age2 as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}












?>



