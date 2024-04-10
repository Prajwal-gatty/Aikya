<?php
session_start();
@include('connect.php');

if (isset($_POST['pooja_button'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $pooja_type = mysqli_real_escape_string($db, $_POST['pooja_type']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $message = mysqli_real_escape_string($db, $_POST['message']);


    if (empty($name)) {
        array_push($errors, "name is required");
    }

    if (empty($phone)) {
        array_push($errors, "phone is required");
    }

    if (empty($pooja_type)) {
        array_push($errors, "pooja_type is required");
    }

    if (empty($date)) {
        array_push($errors, "date is required");
    }

    if (empty($message)) {
        array_push($errors, "message is required");
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: pooja.php');
        exit();
    }


    if (count($errors) == 0) {
    
        $query = "INSERT INTO pooja_bookings (name, phone, pooja_type, date, message)
        VALUES ('$name', '$phone', '$pooja_type', '$date', '$message')";

        $results = mysqli_query($db, $query);
        $_SESSION['message']['type'] = 'success';
        $_SESSION['message']['title'] = 'Booking confirmed';
        $_SESSION['message']['text'] = 'You will be notified soon';
        header('location: pooja.php');
    }
}
