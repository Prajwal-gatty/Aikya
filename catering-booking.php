<?php
session_start();
@include('connect.php');

if (isset($_POST['submit_button'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $contact_number = mysqli_real_escape_string($db, $_POST['contact_number']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $event_description = mysqli_real_escape_string($db, $_POST['event_description']);
    $total_count = mysqli_real_escape_string($db, $_POST['total_count']);
    $booking_date = mysqli_real_escape_string($db, $_POST['booking_date']);

    $errors = array();

    if (empty($name)) {
        array_push($errors, "name is required");
    }

    if (empty($contact_number)) {
        array_push($errors, "contact number is required");
    }

    if (empty($address)) {
        array_push($errors, "address is required");
    }

    if (empty($event_description)) {
        array_push($errors, "event description is required");
    }

    if (empty($total_count)) {
        array_push($errors, "total count is required");
    }

    if (empty($booking_date)) {
        array_push($errors, "date is required");
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: catering.php');
        exit();
    }


    if (count($errors) == 0) {
    
        $query = "INSERT INTO catering_bookings (name, contact_number, address, event_description, total_count, booking_date) 
        VALUES ('$name', '$contact_number', '$address', '$event_description', '$total_count', '$booking_date')";

$results = mysqli_query($db, $query);
if ($results) {
    $_SESSION['message']['type'] = 'success';
    $_SESSION['message']['title'] = 'Booking confirmed';
    $_SESSION['message']['text'] = 'You will be notified soon';
    header('location: catering.php');
    exit();
} else {
    array_push($errors, "Error: " . mysqli_error($db));
    $_SESSION['errors'] = $errors;
    header('Location: catering.php');
    exit();
}
    }
}

?>