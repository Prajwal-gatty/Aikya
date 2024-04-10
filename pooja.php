<?php include('handle-bookings.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pooja services</title>
    <link rel="stylesheet" href="pooja.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>


<body>
    <header>
        <div class="container">
            <h1>Aikya</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#pooja-categories">Pooja Categories</a></li>
                    <li><a href="#catering-services">Catering Services</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="pooja-services" class="services">
            <div class="container">
                <h2>Pooja Services</h2>
                <p>see all the pooja services we offer</p>
            </div>
        </section>

        <section id="search" class="search">
            <div class="search-box">
                <div class="row">
                    <input type="text" placeholder="Search for a specific pooja..." class="search-input">
                    <button class="mag"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>

            <div class="search-pooja-container" id="#pooja-categories">
                <select id="category-dropdown" class="category-dropdown">
                    <option value="select category">All Category</option>
                    <option value="Lord shiva Archana">Lord shiva Archana</option>
                    <option value="Shree Anjaneya Archana">Shree Anjaneya Archana</option>
                    <option value="Shri Durga Devi Archana">Shri Durga Devi Archana</option>
                    <option value="Shri Krishna Archana">Shri Krishna Archana</option>
                    <option value="Shri laxmi pooja">Shri laxmi pooja</option>
                    <option value="Shri Ganapathi pooja">Shri Ganapathi pooja</option>
                    <option value="Shri Sarawasthi pooja">Shri Sarawasthi pooja</option>
                    <option value="Shri Vishnu pooja">Shri Vishnu pooja</option>
                    <option value="barasala(Namakaranam)">barasala(Namakaranam)</option>
                    <option value="Upanayanam">Upanayanam</option>
                    <option value="Marriages">Marriages</option>
                    <option value="Bhumi poojas">Bhumi poojas</option>
                </select>
            </div>
        </section>

        <section id="pooja-categories">
            <div class="poojacat-head">
                <p>Pooja categories</p>
            </div>
        </section>


        <section class="pooja-categories" id="#pooja-archanas">
            <div class="pooja-card">
                <img src="images/shiva-archana.jpg" alt="shiva" class="image-size">
                <p class="para1">Lord Shiva Archana</p>

            </div>
            <div class="pooja-card">
                <img src="images/anjaneya-archana.jpg" alt="anjaneya" class="image-size">
                <p class="para1">Shree Anjaneya Archana</p>

            </div>
            <div class="pooja-card">
                <img src="images/durga-devi.jpeg" alt="durga" class="image-size">
                <p class="para1">Shri Durga Devi Archana</p>

            </div>

            <div class="pooja-card">
                <img src="images/krishna.jpg" alt="krishna" class="image-size">
                <p class="para1">Shri Krishna Archana</p>
            </div>

            <div class="pooja-card more-card" id="more-card">
                <button id="more-button">+More</button>
            </div>

        </section>


        <section class="pooja-categories" id="#special-poojas">
            <div class="pooja-card">
                <img src="images/laxmi-puja.jpeg" alt="laxmi" class="image-size">
                <p class="para1">Shri laxmi pooja</p>
            </div>

            <div class="pooja-card">
                <img src="images/ganesh-puja.jpg" alt="ganesh" class="image-size">
                <p class="para1">Shri Ganapathi pooja</p>
            </div>

            <div class="pooja-card">
                <img src="images/saraswati-puja.jpg" alt="saraswati" class="image-size">
                <p class="para1">Shri Sarawasthi pooja</p>
            </div>

            <div class="pooja-card">
                <img src="images/vishnu-puja.jpg" alt="vishnu" class="image-size">
                <p class="para1">Shri Vishnu pooja</p>
            </div>

            <div class="pooja-card more-card" id="more-card">
                <button id="more-button">+More</button>
            </div>

        </section>

        <section class="pooja-categories" id="#poojas-ceremonies">
            <div class="pooja-card">
                <img src="images/barasala.jpeg" alt="tiger" class="image-size">
                <p class="para1">barasala(Namakaranam)</p>
            </div>

            <div class="pooja-card">
                <img src="images/upanayam.png" alt="laxmi" class="image-size">
                <p class="para1">Upanayanam</p>
            </div>

            <div class="pooja-card">
                <img src="images/marriages.jpg" alt="saraswati" class="image-size">
                <p class="para1">Marriages</p>
            </div>

            <div class="pooja-card">
                <img src="images/bhumi pooja.jpeg" alt="tiger" class="image-size">
                <p class="para1">Bhumi pooja</p>
            </div>

            <div class="pooja-card more-card" id="more-card">
                <button id="more-button">+More</button>
            </div>

        </section>





        <section id="booking-form" class="booking-form">
            <div class="form-container">
                <h2>Book Your Pooja Service</h2>
                <div class="form-box">
                    <form method="post" action="handle-bookings.php">
                        <?php include('errors.php'); ?>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="pooja-type">Pooja Type:</label>
                            <select id="pooja-type" name="pooja_type" required>
                                <option value="select category">All Category</option>
                                <option value="Lord shiva Archana">Lord shiva Archana</option>
                                <option value="Shree Anjaneya Archana">Shree Anjaneya Archana</option>
                                <option value="Shri Durga Devi Archana">Shri Durga Devi Archana</option>
                                <option value="Shri Krishna Archana">Shri Krishna Archana</option>
                                <option value="Shri laxmi pooja">Shri laxmi pooja</option>
                                <option value="Shri Ganapathi pooja">Shri Ganapathi pooja</option>
                                <option value="Shri Sarawasthi pooja">Shri Sarawasthi pooja</option>
                                <option value="Shri Vishnu pooja">Shri Vishnu pooja</option>
                                <option value="barasala(Namakaranam)">barasala(Namakaranam)</option>
                                <option value="Upanayanam">Upanayanam</option>
                                <option value="Marriages">Marriages</option>
                                <option value="Bhumi poojas">Bhumi poojas</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" placeholder="describe about the pooja that You want"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <button class="pooja-button" name="pooja_button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </section>

    <section class="contact" id="contact us">
        <div class="contact-info">
            <div class="contact-card">
                <i class="contact-icon fa-solid fa-envelope"></i>
                <p>email@domain.com</p>
                </div>
        </div>

        <div class="contact-info">
            <div class="contact-card">
            <i class="contact-icon  fa-solid fa-phone"></i>
                <p>1234567890</p>
            </div>
            
        </div>

        <div class="contact-info">
            <div class="contact-card">
            <i class="contact-icon fa-solid fa-map"></i>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            
        </div>

    </section>



    </main>


    <?php

    @include_once('partials/common-scripts.php');

    ?>

    <script src="pooja.js"></script>
</body>

</html>