<?php

if(isset($_POST['upload'])){
    $count = count($_FILES['file']['name']);
    for($x=0; $x<$count; $x++){
        $file_name = $_FILES['file']['name'][$x];
        $file_loc = $_FILES['file']['tmp_name'][$x];

        $upload = 'Image/'.$file_name;
        move_uploaded_file($file_loc, $upload);
    }
    echo 'Upload Successful!';
}

?>

<form action="P51 - Upload Multiple file & Image.php" method="post" enctype="multipart/form-data">
    Select a file
    <input type="file" name="file[]" multiple><br><br>
    <input type="submit" value="Upload" name="upload">
</form>