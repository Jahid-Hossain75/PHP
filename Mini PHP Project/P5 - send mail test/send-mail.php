<?php
    $to_mail = "";
    $sub = "Simple test mail";
    $body = "ki koro dear!";
    $from = "From: jahidhassanxp@gmail.com";

    if(mail($to_mail, $sub, $body, $from)){
        echo "Email successfull to $to_mail";
    }else{
        echo "Email Faild!";
    }

?>
