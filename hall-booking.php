<?php
session_start();
@include('connect.php');

if (isset($_POST['submit_button'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $count = mysqli_real_escape_string($db, $_POST['count']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    $errors = array();

    if (empty($name)) {
        array_push($errors, "Name is required");
    }

    if (empty($phone)) {
        array_push($errors, "Phone number is required");
    }

    if (empty($date)) {
        array_push($errors, "Date is required");
    }

    if (empty($count)) {
        array_push($errors, "Total people count is required");
    }

    if (empty($message)) {
        array_push($errors, "message is required");
    }


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: hall.php');
        exit();
    }


    if (count($errors) == 0) {

        $query = "INSERT INTO hall_bookings (name, phone, date, total_count, message)
         VALUES ('$name', '$phone', '$date', '$count', '$message')";
        
        $results = mysqli_query($db, $query);
        if ($results) {
            $_SESSION['message']['type'] = 'success';
            $_SESSION['message']['title'] = 'Booking confirmed';
            $_SESSION['message']['text'] = 'You will be notified soon';
            header('location: hall.php');
            exit();
        } else {
            array_push($errors, "Error: " . mysqli_error($db));
            $_SESSION['errors'] = $errors;
            header('Location: hall.php');
            exit();
        }
    }
}

?>
