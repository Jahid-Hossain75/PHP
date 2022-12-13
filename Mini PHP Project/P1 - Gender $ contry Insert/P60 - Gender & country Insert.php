<?php
    $connect = mysqli_connect('localhost', 'root', '', 'jahid');
    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
    
        $files_name = $_FILES['file']['name'];
        $files_loc = $_FILES['file']['tmp_name'];
        $upload = 'Image/'.$files_name;
    
        $data_insert = "INSERT INTO formstudent(firstname, lastname, email, gender, country, images)
                        VALUES('$first_name', '$last_name', '$email', '$gender', '$country', '$files_name')";
    
    
        if(mysqli_query($connect, $data_insert)){
            move_uploaded_file($files_loc, $upload);
            // echo 'Data Inserted Successful!';
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
    <title>From - Data Show</title>
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

        .image_size img{
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mt-5">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    First Name:
                    <input type="text" name="firstname">
                    Last Name:
                    <input type="text" name="lastname">
                    Email:
                    <input type="email" name="email"><br>
                    Gender:
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female <br>
                    Country:
                    <select name="country" id="">
                        <option value="">Select country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Indea">Indea</option>
                    </select> <br>
                    Image:
                    <input type="file" name="file"><br>
                    <input type="submit" value="Submit" name="submit">
                </form>
                <form action='P59 - Delete data.php' method='POST'>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Country</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM formstudent";
                                $query = mysqli_query($connect, $sql);

                                while($data = mysqli_fetch_assoc($query)){
                                    $id = $data['Id'];
                                    $firstname = $data['firstname'];
                                    $lastname = $data['lastname'];
                                    $email = $data['email'];
                                    $gender = $data['gender'];
                                    $country = $data['country'];
                                    $image = $data['images'];
                                    
                                    echo "<tr>
                                            <td>$id</td>
                                            <td>$firstname</td>
                                            <td>$lastname</td>
                                            <td>$email</td>
                                            <td>$gender</td>
                                            <td>$country</td>
                                            <td class='image_size'><img src='Image/$image'></td>
                                        </tr>";
                                }
                            ?>
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


<!-- <td>
<a href='P50 - CRUD Edit.php?editid=$id'><input type='button' value='Edit' class='btn btn-success'></a>
<a href='P50 - CRUD-2.php?deleteid=$id'><input type='button' value='Delete' class='btn btn-danger'></a>
</td> -->