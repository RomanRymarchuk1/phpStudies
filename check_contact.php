<?php
    session_start();
    unset($_SESSION["error_username"]);
    unset($_SESSION["error_email"]);
    unset($_SESSION["error_subject"]);
    unset($_SESSION["error_message"]);


    function cleanData ($data) {
        return htmlspecialchars(trim($data));
    }

    function redirect () {
        header("Location: contact.php");
        exit;
    }

    $user_name = cleanData($_POST['username']);
    $from = cleanData($_POST['email']);
    $subject = cleanData($_POST['subject']);
    $message = cleanData($_POST['message']);

    $_SESSION["user_name"] = $user_name;
    $_SESSION["email"] = $from;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;

    if(strlen($user_name) < 2){
        $_SESSION["error_username"] = 'Name is incorrect';
        redirect();
    }
    else if(strlen($from) < 5 || strpos($from, "@") == false){
        $_SESSION["error_email"] = 'Email is incorrect';
        redirect();
    }
    else if(strlen($subject) <= 4){
        $_SESSION["error_subject"] = 'Subject is too short';
        redirect();
    }
    else if(strlen($message) <= 15){
        $_SESSION["error_message"] = 'Message is too short';
        redirect();
    }
    else {
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
        $subject = "=?utf-8?B?".base64_encode("Title")."?=";
        
        $_SESSION["success_mail"] = "Email was successfully sent" ;

        mail("some@email.com", $subject, $message, $headers );

        redirect();
    }

            

