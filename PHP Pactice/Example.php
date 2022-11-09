<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple - Data Show</title>
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Style.css" type="text/css">
    <style>
        .botton_delete{
            width: 1px;
        }

        .botton_delete input{
            padding: 4px 7px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mt-5">
                <form action="" method="post">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class='botton_delete'><input type='submit' name='multiple_delete_btn' value='Delete' class='btn btn-danger'></th>
                                <th>Id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody?>
                            <?php
                                $connect = mysqli_connect('localhost', 'root', '', 'jahid');
                                $sql = "SELECT * FROM users";
                                $query = mysqli_query($connect, $sql);

                                if(mysqli_num_rows($query) > 0){
                                    foreach($query as $row){
                            ?>
                                        <tr>
                                            <td><input type='checkbox' name='stud_delete_id[]' value="<?= $row['Id']; ?>"></td>
                                            <td><?= $row['Id']; ?></td>
                                            <td><?= $row['Email']; ?></td>
                                            <td><?= $row['FirstName']; ?></td>
                                            <td><?= $row['LastName']; ?></td>
                                            <td><?= $row['Password']; ?></td>
                                        </tr>
                            <?php
                                    }
                                }else{
                            ?>
                                   <tr>
                                        <td colspan='5'>No Record Found</td>
                                   </tr> 
                            <?php
                                }
                            ?>
                            <!-- <tr>
                                <td><input type='checkbox' name='ids[]' value='$id'></td>
                                <td>$id</td>
                                <td>$firstname</td>
                                <td>$lastname</td>
                                <td>$email</td>
                                <td>$password</td>
                            </tr> -->
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>