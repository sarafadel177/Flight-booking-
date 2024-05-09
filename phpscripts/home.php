<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Flight booking website</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="book.php">Book</a>
            <a href="flight.php">My Flights</a>
            <a href="x.php">Login</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section ends -->

    <!-- Home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/1.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Travel Around the World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/2.png) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Discover The Unknown</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/3.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Make Your Life Worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>    
    </section>
    <!-- Home section ends -->

    <!-- Service section starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/xxx.png" alt="">
                <h3>How to Book</h3>
            </div>
            <div class="box">
                <img src="images/yyy.png" alt="">
                <h3>Flights Guide</h3>
            </div>
        </div>
    </section>
    <!-- Service section ends -->










    <!-- about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/about.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>SRH is your go-to destination for seamless flight booking. 
            With unbeatable prices, an extensive network, and 24/7 support, 
            we make travel easy and affordable. Join millions of satisfied 
            travelers and experience the convenience of booking with SRH today!</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
    <!-- about section starts -->










    <!-- Footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +20112 246 3387</a>
                <a href="#"><i class="fas fa-envelope"></i> rowan.nour@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Ejust, Alexandria, Egypt</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i> Sara Adel</a>
                <a href="#"><i class="fab fa-twitter"></i> Rowan Nour</a>
                <a href="#"><i class="fab fa-instagram"></i> Hager Tamer</a>
                <a href="#"><i class="fab fa-linkedin"></i> SRH</a>
            </div>
        </div>
        <div class="credit">Created by: <span>Rowan Nour 120210133 - Sara Adel 120210144 - Hager Tamer 120210092</span> | Software Engineering</div>
    </section>
    <!-- Footer section ends -->

    <!-- Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>
</body>
</html>
