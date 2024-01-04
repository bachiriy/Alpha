<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
/**
 * Dump and die.
 *
 * @param $var
 * @return void
 */
function dd($var) {
    echo '<pre>';
    echo '<code>';
    var_dump($var);
    echo '</code>';
    echo '</pre>';
    die();
}

/**
 * Prevent inputs from XSS vulnerability.
 *
 * @param string $str
 * @return string
 */
function str_secure($str) {
    return trim(htmlspecialchars($str));
}

/**
 * @throws Exception
 */
function sendMail($email, $username, $subject, $body)
{
    $mail = new PHPMailer(true);

    // Set the SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mohammedelbachiri945@gmail.com';
    $mail->Password = 'uymn grkq sndh vvcv';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('mohammedelbachiri945@gmail.com', 'Alpha Team');
    $mail->addAddress($email, $username);
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->send();
}