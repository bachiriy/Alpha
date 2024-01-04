<?php
if (empty($_SESSION['user_id'])) {
    header('location: index.php?page=login');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

// Set the SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mohammedelbachiri945@gmail.com';
$mail->Password = 'uymn grkq sndh vvcv';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

try {
    $mail->setFrom('mohammedelbachiri945@gmail.com', 'Alpha Team');
    $mail->addAddress('med.el.bachiri.00@gmail.com', 'Test');
    $mail->isHTML(true);

    $mail->Subject = 'subject here';
    $mail->Body = '<p style="font-size: 30px; background-color: #ffa400; color: white; padding: 20px; border-radius: 10px;">hey from body big and red</p>';

    $mail->send();
    echo 'Email sent successfully.';
} catch (Exception $e) {
    echo 'Error sending email. ', $mail->ErrorInfo;
    echo $e->getMessage();
}
