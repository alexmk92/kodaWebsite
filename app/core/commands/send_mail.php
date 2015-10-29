<?php

$name = (empty($_POST["name"]) ? "" : $_POST["name"]);
$email = (empty($_POST["email"]) ? "" : $_POST["email"]);
$message = (empty($_POST["message"]) ? "" : $_POST["message"]);

if(empty($name) || empty($email) || empty($message))
{
    echo json_encode(Array("error" => true, "message" => "Please ensure you entered your name, email and message for us."));
}
else
{
    $header = "From: noreply@example.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $header.= "X-Priority: 1\r\n";

    $to = "chlo.florence@gmail.com";
    $subject = 'New message from ' . $name;

    if(mail($to, $subject, $message, $header))
    {
        echo json_encode(Array("error" => false, "message" => "Your message was sent, we will be in contact within 48 hours!"));
    }
    else
    {
        echo json_encode(Array("error" => true, "message" => "Whoops, looks like there was a problem with our mailing server...please email us directly at: info@kodadevelopment.com"));
    }
}

