<?php
// variables declaration
$name = "Jahid";
$roll = 661918;
$id = 434575;

// variables name add to "" 
echo "My name is: $name<br>";
echo "My College Roll no: $roll<br>";
echo "My College id no: $id<br>";

//others variable
$name2 = "name";
echo $$name2;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>My name is:
    <?php 
        echo $name;
    ?>
</h2>

</body>
</html>