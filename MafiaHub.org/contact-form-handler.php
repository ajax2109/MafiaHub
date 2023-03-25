<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['comment'];


    $email_from = 'neoripper@pro.space';

    $email_subject = "New Contact Submission";
    
    $email_body =   "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $comment.\n";


    $to = "ajax2109@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>