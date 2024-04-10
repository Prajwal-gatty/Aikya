<?php
include_once('./constants.php');
include_once('../../connect.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// LOGIN USER
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    // Basic validation for empty fields
    if (empty($username)) {
        $_SESSION['errors'][] = "Email is required";
    }
    if (empty($password)) {
        $_SESSION['errors'][] = "Password is required";
    }

    // validation for email format
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors'][] = "Invalid email format";
    }

    // Display errors if any
    if (!empty($_SESSION['errors'])) {

        header("Location: " . BASE_URL . "/admin/login.php");
        exit();
    }


    $password = md5($password);
    $query = "SELECT * FROM admins WHERE email='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if ($results->num_rows > 0) {
        $row = $results->fetch_assoc();
    } else {
        $_SESSION['errors'][] = "Invalid credentials";
        header("Location: " . BASE_URL . "/admin/login.php");
        exit();

    }
    if (mysqli_num_rows($results) == 1) {

        $_SESSION["username"] = $row['name'];
        $_SESSION["id"] = $row['id'];
        $_SESSION["is_admin"] = true;
        $_SESSION["loggedin"] = true;

        $_SESSION['message']['type'] = 'success';
        $_SESSION['message']['title'] = 'Logged in Successfully';
        $_SESSION['message']['text'] = 'Welcome, ' . $row['name'];

        header('location: ' . BASE_URL . '/admin/dashboard.php');
    }
}

if (isset($_GET['logout'])) {

    unset($_SESSION['username']);
    unset($_SESSION["id"]);
    unset($_SESSION["loggedin"]);
    unset($_SESSION["is_admin"]);

    header('location: ' . BASE_URL . '/admin/login.php');
}
