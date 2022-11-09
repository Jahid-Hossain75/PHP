<?php

    // using loop
    if(isset($_POST['submit'])){
        // File Name
        $file_name = $_FILES['filename']['name'];
        // File Type
        $file_type = $_FILES['filename']['type'];
        // File size
        $file_size = $_FILES['filename']['size'];
        // File Location
        $file_location = $_FILES['filename']['tmp_name'];
        // check file extention
        $dotpos = strpos($file_name,'.')+1;
        $ext = substr($file_name, $dotpos);
        // File Upload Folder
        $upload = 'Image/';
        // Random number
        $rand = rand(1000, 10000);
        
        // using loop
        if(!empty($file_name)){
            //using loop and file type jpeg & png.
            if(($file_type == 'image/jpeg') or ($file_type == 'image/png')){
                // using loop and file size maximum 3mb.
                if($file_size<3072000){
                    // File Exists and file rename
                    if(file_exists($upload.''.$file_name)){
                        $newFile_name = 'Image-'.$rand.'.'.$ext;
                        move_uploaded_file($file_location, $upload.$newFile_name);
                        echo 'Upload Successful';
                    }else{
                        // file upload
                        move_uploaded_file($file_location, $upload.$file_name);
                        echo 'Upload Successful';
                    }
                }else{
                    echo 'File size is long';
                }
            }else{
                echo "select a file jpeg/png!";
            }
        }else{
            echo "select a file jpeg/png!";
        }
    }

?>

<form action="P40 - File Upooad, location, type, size, exists, rename.php" method="POST" enctype="multipart/form-data">
    Select Image
    <input type="file" name="filename" id="" multiple><br><br>
    <input type="submit" value="Upload" name="submit">
</form>












<?php
/*
if(isset($_POST['submit'])){
    $filename = $_FILES['file_name']['name'];
    $fileLocation = $_FILES['file_name']['tmp_name'];
    $filetype = $_FILES['file_name']['type'];
    $filesize = $_FILES['file_name']['size'];
    $uploadfile = 'Image/';
    $dospos = strpos($filename,'.')+1;
    $ext = substr($filename, $dospos);
    $rand = rand(1000, 10000);

    if(!empty($filename)){
        if(($filetype == 'image/jpeg') or ($filetype == 'image/png')){
            if($filesize < 3145728){
                if(file_exists($uploadfile.''.$filename)){
                    $new_filename = 'Image-'.$rand.'.'.$ext;
                    move_uploaded_file($fileLocation, $uploadfile.$new_filename);
                    echo 'Upload Successful!';
                }else{
                    move_uploaded_file($fileLocation, $uploadfile.$filename);
                    echo 'Upload Successful!';
                }
            }else{
                echo 'File size is long!';
            }
        }else{
            echo 'Select a file jpeg/png!';
        }
    }else{
        echo 'Select a file jpeg/png!';
    }
}
*/
?>

<!-- <form action="Example.php" method="post" enctype="multipart/form-data">
    Select Image
    <input type="file" name="file_name" id=""><br><br>
    <input type="submit" value="Upload" name="submit">
</form> -->
