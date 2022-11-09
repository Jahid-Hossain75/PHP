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
            for($user_count = 1; $user_count <= 25; $user_count++){
                echo "<li>User $user_count</li>";
            }
        ?>
    </ul>


    
    <ul>
        <?php
            for($user_c = 1; $user_c <= 15; $user_c++){
        ?>
            <li>User <?php echo $user_c ?></li>
        <?php
            }
        ?>
    </ul>

</body>
</html>



