<?php
if (empty($_GET['token'])) {
    header('location: index.php?page=login');
}

try {
    $token = PwdRecover::checkToken($_GET['token']); // checks if token is valid and not expired
    if ($token === false) {
        header('location: index.php?page=login');
    } else {
        if (isset($_POST['pwd_confirm_btn'])) {
            $user = new User($token['user_id']);
            $user->setPassword($_POST['password_confirm']);
            $user->edit();
            $_SESSION['user_id'] = $user->id;
            PwdRecover::deleteToken($token['id']);
            header('location: index.php?page=dashboard');
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}