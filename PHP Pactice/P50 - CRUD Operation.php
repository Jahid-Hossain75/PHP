<?php

$conn = mysqli_connect('localhost', 'root', '', 'jahid');

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student(firstname, lastname, email) VALUES('$first_name', '$last_name', '$email')";
    if(mysqli_query($conn, $sql)){
        echo 'inserted';
        header('location:P50 - CRUD Operation.php');
    }else{
        echo 'not inserted';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From - Data Insert</title>
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Style.css" type="text/css">

    <style>
        .col-sm-5{
            margin: auto;
            background: #ddd;
        }
        .col-sm-5 h3{
            margin: auto;
            text-align: center;
        }
        .col-sm-5 form .input{
            width: 100%;
            outline: none;
            padding-left: 7px;
        }
        .col-sm-5 form .btn{
            float: right;
            width: 100px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-5 p-5 border border-success mt-5">
                <h3 class="">Form</h3>
                <form action="P50 - CRUD Operation.php" method="post">
                    Firstname:<br>
                    <input type="text" name="firstname" id="" class="input" placeholder="Enter your firstname"><br><br>
                    Lastname: <br>
                    <input type="text" name="lastname" id="" class="input" placeholder="Enter your lastname"><br><br>
                    Email: <br>
                    <input type="email" name="email" id="" class="input" placeholder="Enter your email address"><br><br>
                    <input type="submit" value="Insert" name="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>












    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>
</html>