<?php include('catering-booking.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>catering</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='catering.css'>
    <script src='main.js'></script>
</head>

<body>
    <header>
        <div class="header-container">
            <h1>Aikya</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about us">About us</a></li>
                    <li><a href="catering.php">Catering Service</a></li>
                    <li><a href="hall.php">Hall Service</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="describe">
        <div class="message">
            <div class="p1">
                <p>Exquisite flavors for any event</p>
            </div>
            <div class="p2">
                <p>Indulge in our culinary masterpieces, tailored to your event's needs.</p>
            </div>
            <div class="book">
                <button><a href="#book">Book Your Service</a></button>
            </div>
        </div>
    </section>

    <section class="about-us" id="about us">
    <div class="our-service">
        <div class="card">
        <img src="images/food1.webp" alt="Our Story">
            <h3>Our Philosophy</h3>
            <p>At Aikya, we believe that food is more than just sustenance - it's an experience. That's why we are passionate about creating unique, flavorful dishes that delight the senses and leave a lasting impression on our clients and their guests.</p>
        </div>
        <div class="card">
        <img src="images/food2.webp" alt="Our Mission">
            <h3>Our ingrdients</h3>
            <p>We use only the freshest, highest quality ingredients in our dishes, sourced locally whenever possible. Our chefs are constantly experimenting with new flavors and techniques to create unique, delicious dishes that showcase the best of what each season has to offer.</p>
        </div>
        <div class="card">
        <img src="images/food3.webp" alt="Our Mission">
            <h3>Our service</h3>
            <p>We offer a range of catering services to fit the needs of any event, including full-service catering, drop-off catering, and custom menus. Whether you're planning a corporate event, a wedding, or a private party, we'll work with you to create a menu and service plan that fits your needs and exceeds your expectations.</p>
        </div>
    </div>
</section>


    <div class="container">
        <form method="post" action="catering.php" id="book">
            <?php include('errors.php'); ?>
            <h1><b>Book your catering service</b></h1>
            <label>Name:</label>
            <input type="text" name="name"><br>
            <label>Contact no:</label>
            <input type="number" name="contact_number"><br>
            <label>Address:</label>
            <textarea id="Address" size="60" name="address"></textarea><br>
            <label>Please specify the event for which the catering service is required:</label>
            <textarea id="text" size="60" name="event_description"></textarea><br>
            <label>Total count:</label>
            <input type="number" name="total_count"><br>
            <label>select a date</label>
            <input type="datetime-local" id="Test_DatetimeLocal" name="booking_date"><br>
            <br><button type="submit" id="confirm" value="submit" name="submit_button" onclick="">Submit</button>
            <button type="reset" id="reset" value="reset" onclick="">reset</button>
        </form>
    </div>
    <?php

    @include_once('partials/common-scripts.php');

    ?>
</body>

</html>