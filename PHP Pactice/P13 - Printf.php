<?php

// %% - Returns a percent sign
// %b - Binary number
// %c - The character according to the ASCII value
// %d - Signed decimal number (negative, zero or positive)
// %e - Scientific notation using a lowercase (e.g. 1.2e+2)
// %E - Scientific notation using a uppercase (e.g. 1.2E+2)
// %u - Unsigned decimal number (equal to or greather than zero)
// %f - Floating-point number (local settings aware)
// %F - Floating-point number (not local settings aware)
// %g - shorter of %e and %f
// %G - shorter of %E and %f
// %o - Octal number
// %s - String
// %x - Hexadecimal number (lowercase letters)
// %X - Hexadecimal number (uppercase letters)






//Printf and Echo do the same. But printf has some different functions.

$name = "jahid";
$new_name = ucwords($name); //using ucwords function -- first character capital
echo "Hello $new_name <br>";


//concotinet ucwords
$name_2 = "rana";
echo "Hello ".ucwords($name_2)."<br>";


//using printf function -- single vareable %s
$dist = "Jashore";
printf("My Distic: %s" ."<br>", $dist);

//using printf function -- multiple vareable %s and others system.
$clz_name = "MPI";
printf("My name is: %s.<br> 
        My College name is: %s. <br> 
        My Department is: %s.", 
        ucwords($name), $clz_name, "Computer"
);


//vareable and html format use
$first_name = "bejoy";
$last_name = "hossain";

$html_block = "<div>
        <h1>%s</h1>
        <h2>%s</h2>
</div>";
printf($html_block, ucwords($first_name), ucwords($last_name));



?>