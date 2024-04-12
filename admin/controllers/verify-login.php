<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once('controllers/constants.php');


if (isset($_SESSION['loggedin'])) {
    if (isset($_SESSION['is_admin'])) {
        if (basename($_SERVER['REQUEST_URI']) == 'login.php') {
            header('Location: ' . BASE_URL . '/admin/dashboard.php');
            exit();
        }
    } else {
        if (basename($_SERVER['REQUEST_URI']) != 'login.php') {
            header('location: ' . BASE_URL . '/login.php');
            exit();
        }
    }
} else {
    if (basename($_SERVER['REQUEST_URI']) == 'login.php') {
    } else {

        header('location: ' . BASE_URL . '/admin/login.php');
        exit();
    }
}
