<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent Mail</title>
    <link rel="stylesheet" href="Style.css">
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="head">
        <h1>Sent mail</h1>
    </div>

    <?php
        $connection = mysqli_connect('localhost', 'root', '', 'jahid');
        if(!$connection){
            die("Not connected.".mysql_error());
        }
        $query = "SELECT * FROM user_info";
        $final_query = mysqli_query($connection, $query);
        $count = mysqli_num_rows($final_query);
        if($count > 0){
    ?>
        <form action="P5 - sent ck final -02.php" method="post">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>DB ID</th>
                        <th>Email</th>
                        <th><input type="submit" class="btn btn-success" name="sent_check_mail" value="SENT_Selected_Mail"></th>
                    </tr>
                </thead>

                <?php
                    while ($row = mysqli_fetch_assoc($final_query)) {
                        $db_id = $row['id'];
                        $email = $row['email'];
                ?>
                <tbody>
                      <tr>
                        <td><?php echo $db_id ?></td>
                        <td><?php echo $email ?></td>
                        <td><center><input type="checkbox" name="check_data[]" value="<?php echo $db_id ?>"></center></td>
                      </tr>
                </tbody>

                <?php
                    }
                ?>
            </table>
        </form>



        <?php
        }else{
            echo "You don't have any data in your database.";
        }
        ?>
    


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>