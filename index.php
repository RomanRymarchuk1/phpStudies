<?php
    $title = 'Home';
    require_once("./blocks/header.php");//connect once
?>
    <h1>Home</h1>
<?php
    $message = "Message";
    $to = "roman.rymarchuk01@gmail.com";
    $from = "eeeeeee.nnnnnnn2014@yandex.ru";

    $subject = "=?utf-8?B?".base64_encode("Title")."?="; // encode the subject of the letter MANDATORY
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";//add headers to mail

    mail($to, $subject, $message, $headers); //dont work on localhost

    require_once("./blocks/footer.php");
?>