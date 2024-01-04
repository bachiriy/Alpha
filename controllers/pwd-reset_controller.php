<?php

// redirect to dashboard if already logged in
if (!empty($_SESSION['user_id'])) {
    header('location: index.php?page=dashboard');
}

// send token
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    try {
        $user = User::checkIfUserExist($data['email']);
        if ($user !== false) {
            $token = bin2hex(random_bytes(32));

            $addToken = PwdRecover::AddToken($user['user_id'], $token);

            $url = 'http://localhost/Med_El_Bachiri_Alpha/index.php?page=pwd-confirm'. '&token=' . $token;

            $subject = 'Password Reset Request';
            $body = <<<HTML
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Password Reset</title>
                </head>
                <body>
                    <h3>Dear {$user['username']},</h3>

                    <p>You recently requested a password reset. Click the link below to create a new password:</p>

                    <p><a href="{$url}">{$url}</a></p>

                    <p>If you didn't make this request, please ignore this message.</p>

                    <p>Best,<br>
                    Alpha Team</p>
                </body>
                </html>
            HTML;

            sendMail($user['email'], $user['username'], $subject, $body); // check =>  _functions/functions.php
            exit(true);
        } else {
            exit('Account Does not Exist');
        }
    } catch (Exception|\Exception $e) {
        exit($e->getMessage());
    }
}