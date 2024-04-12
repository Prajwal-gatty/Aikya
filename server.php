<?php
session_start();
@include('connect.php');
@include_once('partials/common-scripts.php');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if ($password != $confirm_password) {
    array_push($errors, "The password and confirm password does not match");
  }

  if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: register.php');
    exit();
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database

    $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);

    $_SESSION['message']['type'] = 'success';
    $_SESSION['message']['text'] = 'Registered Successfully';

    header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: login.php');
    exit();
  }

  
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) != 1) {
      array_push($errors, "Username and password do not match");
    }

    if (!empty($errors)) {
      $_SESSION['errors'] = $errors;
      header('Location: login.php');
      exit();
    }
  

    if (mysqli_num_rows($results) == 1) {
      
      $_SESSION["username"] = $username;
      $_SESSION["id"] = $id;
      $_SESSION["loggedin"] = true;

      $_SESSION['message']['type'] = 'success';
      $_SESSION['message']['title'] = 'Logged in Successfully';
      $_SESSION['message']['text'] = 'Welcome, ' . $username;



      header('location: index.php');
    } else {
      array_push($errors, "Wrong username/password combination");
      // print_r($errors);
    }
  }
}

if (isset($_GET['logout'])) {
  session_destroy();

  unset($_SESSION['username']);
  unset($_SESSION["id"]);
  unset($_SESSION["loggedin"]);

  header("location: login.php");
}
