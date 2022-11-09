<?php

$conn = mysqli_connect('localhost', 'root', '', 'jahid');
if(!$conn){
    echo mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $file_name = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];

    $upload_file = "Image/";
    $dot_pos = strpos($file_name, '.')+1;
    $extention = substr($file_name, $dot_pos);
    $rand = rand(1000, 10000);

    if(!empty($file_name)){
        if(($file_type == "image/jpeg") or ($file_type == "image/png")){
            if($file_size < 3072000){
                if(file_exists($upload_file.''.$file_name)){
                    $new_file_name = 'Image-'.$rand.'.'.$extention;
                    if(move_uploaded_file($file_loc, $upload_file.$new_file_name)){
                        $sql = "INSERT INTO images(imgname) VALUES('$new_file_name')";
                        if(mysqli_query($conn, $sql)){
                            echo 'File Upload Successful!';
                        }else{
                            echo "Data not inserted!";
                        }
                    }
                }else{
                    if(move_uploaded_file($file_loc, $upload_file.$file_name)){
                        $sql = "INSERT INTO images(imgname) VALUES('$file_name')";
                        if(mysqli_query($conn, $sql)){
                            echo 'File Upload Successful!';
                        }else{
                            echo "Data not inserted!";
                        }
                    }
                }
            }else{
                echo "File size is large, please upload file with in 3MB.";
            }
        }else{
            echo "Select a file jpeg/png!";
        }
    }else{
        echo "Select a file jpeg/png!";
    }
}
?>  


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    Please Select a file.
    <input type="file" name="file" id="" multiple><br><br>
    <input type="submit" value="Submit" name="submit">
</form>


<?php

    $sql = "SELECT * FROM images";
    $query = mysqli_query($conn, $sql);
    while($data2 = mysqli_fetch_assoc($query)){
        $imagename = $data2['imgname'];
        echo "<img src='Image/$imagename' width='500px'> <br><br>";
    }
    
?>