<?php

if(isset($_POST['string']) && isset($_POST['find']) && isset($_POST['replace'])){
    $string = $_POST['string'];
    $find = $_POST['find'];
    $replace = $_POST['replace'];

    $offset = 0;
    $strlen = strlen($find);

    if(!empty($string) && !empty($find) && !empty($replace)){
        while($strpos = strpos($string, $find, $offset)){
            $offset = $strpos + $strlen;
            $string = substr_replace($string, $replace, $strpos, $strlen);
        }
        echo $string;
    }else{
        echo "Fill up all fields!";
    }
}

?>

<form action="P35 - Find & Replace Script.php" method="POST">
    <textarea name="string" id="" cols="25" rows="5"></textarea><br><br>
    Find: <input type="text" name="find"> <br><br>
    Replace: <input type="text" name="replace"><br><br>
    <input type="submit" value="submit">
</form>