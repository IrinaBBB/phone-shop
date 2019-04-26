<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../PHPMailer-master/src/Exception.php';
require __DIR__ . '/../PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer-master/src/SMTP.php';


function sendMailTo($email) {

    $mail = new PHPMailer();

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'surnamen831@gmail.com';
        $mail->Password = 'JdsjVeGYzDDdKzATiM79';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('sublime@shop.com', 'Sublime Subscription');
        $mail->addAddress("$email");


        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'Hello! You got this email because you wanted to be added to the Sublime Shop Mailing List. Please, use this link to confirm your email address';


        $mail->send();
        return 'Message has been sent';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}