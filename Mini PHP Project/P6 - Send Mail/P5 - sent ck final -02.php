<?php
    $connection = mysqli_connect('localhost', 'root', '', 'jahid');
    if(!$connection){
        die("Not connected.".mysql_error());
    }
    if(isset($_POST['sent_check_mail'])){
        $reciv_array = $_POST['check_data'];
        $all_selected_id = implode(',', $reciv_array);
        
        $query = "SELECT * FROM user_info WHERE id in ($all_selected_id)";
        $finall_mail_query = mysqli_query($connection, $query);

        if($finall_mail_query == true){
            while ($row = mysqli_fetch_assoc($finall_mail_query)) {
                $email_sent_to = $row['email'];
                $subject = "Simple email test";
                $body = "Hello Dear";
                $header = "From: jahidhassanxp@gmail.com";

                if(mail($email_sent_to, $subject, $body, $header)){
                    echo "Email successfully send to $email_sent_to";
                }else{
                    echo "Email send failed.";
                }
            }
        }else{
            echo "Query no true";
        }
    }






?>