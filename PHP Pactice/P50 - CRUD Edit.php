<?php

$conn = mysqli_connect('localhost', 'root', '', 'jahid');

if(isset($_GET['editid'])){
    $get_id = $_GET['editid'];
    $sql = "SELECT * FROM student WHERE Id = '$get_id'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $id = $data['Id'];
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
}
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['id'])){
    $id = $_POST['id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email_add = $_POST['email'];

    $data_update = "UPDATE student SET firstname = '$first_name', lastname = '$last_name', email = '$email_add' WHERE id = '$id'";

    if(mysqli_query($conn, $data_update)){
        header('location: P50 - CRUD-2.php');
        echo 'Data Update Successful!';
    }else{
        echo 'Data Not Update!';
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
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="text" name="id" id="" value="<?php echo $id; ?>" hidden>
                    Firstname:<br>
                    <input type="text" name="firstname" id="" class="input" value="<?php echo $firstname; ?>"><br><br>
                    Lastname: <br>
                    <input type="text" name="lastname" id="" class="input" value="<?php echo $lastname; ?>"><br><br>
                    Email: <br>
                    <input type="email" name="email" id="" class="input" value="<?php echo $email; ?>"><br><br>
                    <input type="submit" value="Insert" name="insert" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>
</html>