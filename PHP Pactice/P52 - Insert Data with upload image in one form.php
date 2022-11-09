<?php

$conn = mysqli_connect('localhost', 'root', '', 'jahid');

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $files_name = $_FILES['file']['name'];
    $files_loc = $_FILES['file']['tmp_name'];
    $upload = 'Image/'.$files_name;

    $data_insert = "INSERT INTO formstudent(firstname, lastname, email, images) VALUES('$first_name', '$last_name', '$email', '$files_name')";


    if(mysqli_query($conn, $data_insert)){
        move_uploaded_file($files_loc, $upload);
        echo 'Data Inserted Successful!';
    }else{
        echo 'Data Not Inserted!';
    }
}
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        First Name:<br>
        <input type="text" name="firstname" id=""><br><br>
        Last Name:<br>
        <input type="text" name="lastname" id=""><br><br>
        Email:<br>
        <input type="email" name="email" id=""><br><br>
        Image:
        <input type="file" name="file" id=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        $sql = "SELECT * FROM formstudent ORDER BY Id DESC";
        $query = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($query)){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $file = $row['images'];

            echo 'Name: '.$firstname.' '.$lastname.'<br>'.'Email: '.$email.'<br>';
            echo "<img src='Image/$file' width='150px'>";
        }
    ?>
</body>
</html>