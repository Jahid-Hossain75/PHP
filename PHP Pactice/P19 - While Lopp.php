<?php

// Using while loop.
$counter = 1;
while($counter <= 5){
    echo "$counter. Jahid <br>";
    $counter++;
}
echo "<br><br><br>"


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

    <!-- using while loop 1 -->
    <form action="#">
    Year
    <select name="#" id="#">
        <?php
            $year = 2000;
            while($year <= 2050){
        ?>
        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
        <?php
            $year++;
            }
        ?>
    </select>
    </form>

    <!-- using while loop 2 -->
    <form action="#">
    Year2
    <select name="#" id="#">
        <?php
            $year2 = 1000;
            while($year2 <= 1050){
                echo "<option value='$year2'>$year2</option>";
                $year2++;
            }
        ?>
    </select>
    </form>

</body>
</html>