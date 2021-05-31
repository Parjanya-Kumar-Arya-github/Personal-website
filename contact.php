<?php
    $name= $_POST['name'];
    $visitor_email= $_POST['email'];
    $message= $_POST['message'];


    $email_from = "phantomkingpk12@gmail.com";

    $email_subject = "Reply from $name";

    $email_body = "Email id $visitor_email \n.".
                    "Message: $message"
                    





?>