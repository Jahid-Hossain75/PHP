<?php

// $all_key = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', ',', '.', '/', '?', '>', '<', ':', ';', '[', ']', '{', '}', '=', '+', '-', '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '~', '`', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ' ');

// $random_length = array(8, 9, 10, 11, 12, 13, 14, 15);
// shuffle($random_length);
// $final_length = $random_length[0];
// echo 'Length: '.$final_length.'<br>';
// $str = "";

// for ($i=0; $i < $final_length; $i++) { 
//     shuffle($all_key);
//     $str .=$all_key[0];
// }
// echo "Password: ".$str;

?>





<?php

// ‍all key this password -- random password
$all_key = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', ',', '.', '/', '?', '>', '<', ':', ';', '[', ']', '{', '}', '=', '+', '-', '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '~', '`', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ' ');

// Random number
$random_length = rand(8, 15);
// show the random number;
echo "Length: ".$random_length."<br>";
// null variable;
$str = '';
// Useing for loop
for ($i=0; $i < $random_length; $i++) {
    // It will take different numbers or characters
    shuffle($all_key);
    // A single value will go inside the null variable
    $str .=$all_key[0];
}
// show the random password, $str variable
echo "Password: ".$str;

?>