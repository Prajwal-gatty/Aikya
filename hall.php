<?php include('hall-booking.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pooja services</title>
    <link rel="stylesheet" href="hall.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="container">
            <h1>Aikya</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pooja.php">Pooja service</a></li>
                    <li><a href="catering.php">Catering Services</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="Hall booking" class="services">
            <div class="container">
                <h2>Hall booking</h2>
                <p>Reserve venue for your special events.... </p>
            </div>
        </section>
          <section id="booking-form" class="booking-form">
            <div class="form-container">
                <h2> <u>Hall Booking</u></h2>
                <div class="form-box">
                    <form action="hall-booking.php" method="post">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group" id="pooja-options" style="display: none;">
                            <label for="pooja-options">Pooja Options:</label>
                            <select id="pooja-options" name="pooja-options">
                                <!-- Options for selected pooja type will be added dynamically here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date"  name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="total count">Total people count:</label>
                            <input type="number" id="count" name="count" required>
                            
                            </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" placeholder="Mention Your event  and necessary arrangements required."></textarea>
                        </div>
                        <button class="hall-button" type="submit" name="submit_button">Submit</button>
                    </form>
                </div>
            </div>
        </section>       
    </main>
    <?php

        @include_once('partials/common-scripts.php');
    ?> 
</body>
</html>