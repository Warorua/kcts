<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
try {
    //Server settings

    $mail->isSMTP();
    $mail->Host = gethostbyname('mail.techkira.net');
    $mail->SMTPAuth = true;
    $mail->Username = 'mailer.kakamega@techkira.net';
    $mail->Password = '9ATYY4s-SoxV';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('mailer.kakamega@techkira.net');

    //Recipients
    $mail->addAddress('waroruaalex640@gmail.com');
    $mail->addReplyTo('mailer.auto_system@techkira.net');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'KCTS';
    $mail->Body    = 'test message';

    $mail->send();
 {
        echo 'Account created. Check your email to activate.';
        //header('location: https://techkira.net/v2/new#');
    }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    //header('location: https://techkira.net/v2/new#');
}
