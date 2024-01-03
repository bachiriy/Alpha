<?php
if (empty($_SESSION['user_id'])) {
    header('location: index.php?page=login');
}