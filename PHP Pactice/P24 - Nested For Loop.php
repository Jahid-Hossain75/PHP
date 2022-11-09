<?php

    for($counter_list = 1; $counter_list <= 3; $counter_list++){
        echo "List $counter_list <br>";
        for($inner_list = 1; $inner_list <= 2; $inner_list++){
            echo "-----Inner list $inner_list <br>";
        }
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
    
    <ul>
        <?php
            for($counter_list = 1; $counter_list <= 7; $counter_list++){
        ?>
        <li>List <?php echo $counter_list ?>
            <ul>
                <?php
                    for($inner_list = 1; $inner_list <= 3; $inner_list++){
                        echo ("<li> Inner list $inner_list");
                    }
                ?>
            </ul>
        </li>
        <?php
            }
        ?>
    </ul>

</body>
</html>