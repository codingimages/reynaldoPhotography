<?php
session_start();

/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

if(empty($name) && empty($email) && empty($message) && empty($phone)) {
    $_SESSION['msgFields'] = "Please enter mandatory fields";
    return header("Location:../index.php");
} else {
    /*Content*/
    $from = new SendGrid\Email($name, $email);
    $subject = "Contact Form - Forma de Contacto - codingimages.com";
    $to = new SendGrid\Email("Coding Images", "rnavedojr@gmail.com");
    $content = new SendGrid\Content("text/html", "You have a new message with following details...<br>Name: $name<br><br>Phone: $phone<br><br>Email: $email<br><br>Message:<br><br> $message");

    /*Send the mail*/
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $apiKey = ('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');
    $sg = new \SendGrid($apiKey);

    /*Response*/
    $response = $sg->client->mail()->send()->post($mail);
    
    if($response->_status_code == 202){
        $_SESSION['msg'] = "Message has been sent successfully";
    } else {
        $_SESSION['msg'] = "An error happened, try again";
    }
    header("Location:../index.php");
}
