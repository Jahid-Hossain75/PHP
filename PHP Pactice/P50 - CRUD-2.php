<?php

$conn = mysqli_connect('localhost', 'root', '', 'jahid');

if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];

    $sql2 = "DELETE FROM student WHERE id = $deleteid";
   if(mysqli_query($conn, $sql2) == TRUE){
        header('location:P50 - CRUD-2.php');
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From - Data Show</title>
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Style.css" type="text/css">

    <style>
        .col-sm-6 h3{
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6 p-2 border border-success mt-5">
                <h3 class="p-2 bg-info text-white">User's Information</h3>
                <?php
                    $sql = "SELECT * FROM student";
                    $query = mysqli_query($conn, $sql);
                    echo "<table class='table table-dark table-hover'>
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>";
                    
                    while($data = mysqli_fetch_assoc($query)){
                        $id = $data['Id'];
                        $firstname = $data['firstname'];
                        $lastname = $data['lastname'];
                        $email = $data['email'];

                        echo "<tr>
                                <td>$id</td>
                                <td>$firstname</td>
                                <td>$lastname</td>
                                <td>$email</td>
                                <td>
                                    <a href='P50 - CRUD Edit.php?editid=$id'><input type='button' value='Edit' class='btn btn-success'></a>
                                    <a href='P50 - CRUD-2.php?deleteid=$id'><input type='button' value='Delete' class='btn btn-danger'></a>
                                </td>
                            </tr>";
                    }
                    echo "</table>";
                ?>
                
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>
</html>