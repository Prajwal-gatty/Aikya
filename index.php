<?php
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<?php include('feedback-data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aikya</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    @include_once('partials/header.php')
    ?>
    <main>
        <section class="hero">
            <div class="container">
                <h1>Welome To Aikya</h1>
                <p>Your one-stop destination for poojas, catering, and event hosting!</p>
                <a href="#services" class="cta-button">Explore Now</a>
            </div>
    </main>
    </section>
    <section id="about" class="about">
        <div class="container2">
            <h2>About Us</h2>
            <p>Welcome to Aikya, your premier destination for seamlessly blending catering services, affordable hall bookings, and a variety of pooja services along with related catering. <br>At Aikya, we aim to provide a unique blend of services that cater to your diverse needs, whether you're planning a traditional Hindu ceremony, a housewarming event, a marriage, or any other ritual.</p>
            <p>Our platform offers a user-friendly interface for booking poojas, with options to include catering services to ensure a complete experience. The hall booking system provides clear information on available dates, pricing, and additional services, making it easy for you to plan engagements, upanayana ceremonies, birthday celebrations, and more within your budget.</p><br>
            <p>What sets us apart is not just the quality of our services but also their affordability, making premium experiences accessible to a broader audience. We prioritize your satisfaction and strive to create unforgettable experiences tailored to your needs.</p><br>
            <p>Join us at Aikya and experience the convenience, affordability, and quality that define our services.</p>
        </div>
    </section>
    
    <section id="services" class="services">
        <div class="title">
            <h2>Our Services</h2>
        </div>
        <div class="services-container">
            <div class="service">
                <div class="card">
                    <div class="icon">
                        <i class="pooja-service"></i>
                    </div>
                    <h3>Pooja Services</h3>
                    <p>Choose from a variety of traditional Hindu poojas for your special occasions,conducted by experienced priests to bring blessings and prosperity to your home.</p>
                    <button><a href="pooja.php" class="no-underline">Book Now</a></button>
                </div>
            </div>
            <div class="service">
                <div class="card">
                    <div class="icon">
                        <i class="catering-service"></i>
                    </div>
                    <h3>Catering Services</h3>
                    <p>At Aikya, our catering services are customized to the type of pooja you're organizing. Additionally, we offer a separate catering option for other events, ensuring a diverse range of catering choices to suit your needs.</p>
                    <button><a href="catering.php" class="no-underline">Book Now</a></button>
                </div>
            </div>
            <div class="service">
                <div class="card">
                    <div class="icon">
                        <i class="hallbook-service"></i>
                    </div>
                    <h3>Hall Booking</h3>
                    <p>Our hall booking service offers a versatile venue for your events and poojas, complete with all necessary amenities. Whether you're planning a small function or a religious ceremony, our venue is the perfect choice.</p>
                    <button><a href="hall.php" class="no-underline">Book Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <section id="feedback" class="feedback">
        <div class="feedback-container">
            <h2>Feedback Form</h2>
            <div class="w3layouts_main wrap">
                <h3>Please help us to serve you better by taking a couple of minutes.</h3>
                <form action="feedback-data.php" method="post" class="agile_form">

                    <?php include('errors.php'); ?>
                    <h2>How satisfied were you with our Service?</h2>
                    <ul class="agile_info_select">
                        <li>
                            <input type="radio" name="satisfaction_level" value="excellent" id="excellent" required>
                            <label for="excellent">excellent</label>
                            <div class="check w3"></div>
                        </li>
                        <li>
                            <input type="radio" name="satisfaction_level" value="good" id="good">
                            <label for="good">good</label>
                            <div class="check w3ls"></div>
                        </li>
                        <li>
                            <input type="radio" name="satisfaction_level" value="neutral" id="neutral">
                            <label for="neutral">neutral</label>
                            <div class="check wthree"></div>
                        </li>
                        <li>
                            <input type="radio" name="satisfaction_level" value="poor" id="poor">
                            <label for="poor">poor</label>
                            <div class="check w3_agileits"></div>
                        </li>
                    </ul>
                    <h2>If you have specific feedback, please write to us...</h2>
                    <textarea placeholder="Additional comments" class="w3l_summary" name="comments"></textarea>
                    <input type="text" placeholder="Your Name" name="name" />
                    <input type="email" placeholder="Your Email" name="email" />
                    <input type="tel" placeholder="Your Number" name="num" /><br>
                    <center><input type="submit" value="Submit " name="submit_button" class="agileinfo" /></center>
                </form>
            </div>
        </div>
    </section>
    <?php

    @include_once('partials/common-scripts.php');

    ?>

<footer>
    <div class="footer-container">
        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#feedback">Feedback</a></li>
            </ul>
        </div>
        <div class="contact-section">
            <h3>Contact Us</h3>
            <p>123 Main Street, City, Country</p>
            <p>Email: info@example.com</p>
            <p>Phone: +1234567890</p>
        </div>
    </div>
</footer>

    <?php

    @include_once('partials/common-scripts.php');
    ?>
<script>
    // Show the preloader
    
</script>


</body>

</html>