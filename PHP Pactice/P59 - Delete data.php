<?php
    // session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'jahid');

    if(isset($_POST['multiple_delete_btn'])){
        $all_id = $_POST['ids'];
        $extend_id = implode(',', $all_id);
        
        $sql = "DELETE FROM users WHERE Id IN ($extend_id)";
        $query = mysqli_query($connect, $sql);
        if($query){
            // $_SESSION['status'] = 
            echo "Data Deleted Successfully";
            header("Location: P59 - Multiple Data delete.php");
        }
        else{
            echo "Data Not Deleted";
            header("Location: P59 - Multiple Data delete.php");
        }
    }



    // $_POST['ids'];
    // foreach($ids as $key => $value){
    //     $multi_delete = "DELETE FROM users WHERE id = {$value}";
    //     if(mysqli_query($connect, $multi_delete) == TRUE){
    //         header('location:P59 - Multiple Data delete.php');
    //     }
    // }
    // echo 'Hello';

?>