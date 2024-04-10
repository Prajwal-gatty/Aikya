<?php
session_start();
@include('connect.php'); 

if (isset($_POST['submit_button'])) {
    $satisfaction_level = mysqli_real_escape_string($db, $_POST['satisfaction_level']);
    $comments = mysqli_real_escape_string($db, $_POST['comments']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['num']); 

    $errors = array();

    if (empty($satisfaction_level)) {
        array_push($errors, "Satisfaction level is required");
    }

    if (empty($comments)) {
        array_push($errors, "Comment is required");
    }

    if (empty($name)) {
        array_push($errors, "Name is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($phone)) {
        array_push($errors, "Phone number is required");
    }

    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
        exit();
    }

    $query = "INSERT INTO feedback_data (satisfaction_level, comments, name, email, phone) 
              VALUES ('$satisfaction_level', '$comments', '$name', '$email', '$phone')";

    $results = mysqli_query($db, $query);
    if ($results) {
        $_SESSION['message']['type'] = 'success';
        $_SESSION['message']['title'] = 'Feedback submitted';
        $_SESSION['message']['text'] = 'Thank you for your feedback!';
        header('location: index.php');
        exit();
    } else {
        array_push($errors, "Error: " . mysqli_error($db));
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
        exit();
    }
}
?>
