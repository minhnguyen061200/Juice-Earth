<!DOCTYPE html>
<html lang="en" style="font-family: 'Lato', sans-serif">
<head>
<?php
    session_start();

    if (isset($_SESSION['username'])) {
        // Grab user data from the database using the user_id
        // Let them access the "logged in only" pages
    } else {
        // Redirect them to the login page
        header("Location: http://titan.csit.rmit.edu.au/~s3581439/ebusiness/login.php");
    }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>
<script src="js/main.js"></script>
<body id="top" onload="updateCartCount()">
<nav>
    <div style="z-index:100; display: flex; align-items: center;">
        <a href="index.php">
            <img src="img/logo-new.png" alt="Juice Earth Logo" style="height:80px; padding: 5px;">
        </a>
    </div>
    <div id="menuItemsContainer">
        <a href="index.php"><span class="menuItem">HOME</span></a>
        <a href="product_catalogue.php"><span class="menuItem">SHOP</span></a>
        <a href="aboutus.php"><span class="menuItem" style="color: black;">ABOUT US</span></a>
        <a href="contactus.php"><span class="menuItem" id="menuLastElement">CONTACT US</span></a>
    </div>
    <div id="cartIconContainer">
        <a href="cart.php">
            <span id="cartCounter">0</span>
            <img src="img/shopping-cart-128.png" alt="Shopping Cart" style="height:45px;">
        </a>
    </div>
</nav>
<header id="home">
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right navicon" style="visibility: hidden">
                    <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                    <h1 class="animated fadeInDown">About<span>Us</span></h1>
                    <p class="animated fadeInUp delay-05s">Juice <em>Earth</em></p>
                </div>
            </div>
        </div>
        </div>
    </section>
</header>
</section>
<section class="text-center" id="responsive">
    <div class="container-fluid nopadding responsive-services">
        <div class="wrapper">
            <div class="iphone">
                <div><img src="img/Screen%20Shot%202019-10-06%20at%203.30.25%20pm.png" width="720" height="650"></div>
            </div>
            <div class="fluid-white"></div>
        </div>
        <div class="container designs">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div id="servicesSlider">
                        <ul class="slides">
                            <li>
                                <h1 class="arrow">Who are We</h1>
                                <p>Juice Earth was established by four students from RMIT. Our passion is to create and
                                    deliver healthy
                                    juice cleanse programs to you. In August 2019, we discovered the power of juice
                                    cleanse and the power
                                    it has to transform one’s life.</p>
                                <p>
                                    The juice cleanse program has a twofold affect; whilst the cold pressed blends
                                    infuse your body with
                                    rich nutrients for optimum health, it also assists your body to expel toxins
                                    accumulated from
                                    chemically added & processed food. </p>
                                <p>All our healthy and organic ingredients are sourced from our best local
                                    Australia.</p>
                            </li>
                            <li>
                                <h1 class="arrow">Why are we different</h1>
                                <p>What sets Juice Earth apart from our competitors in the market is that we incorporate
                                    asian
                                    ingredients.</p>
                                <p>
                                    Common Asian ingredients that are incorporated in our juice clease programs include
                                    Ginger, Beetroot,
                                    Tumeric, Star Anise, Lemongrass etc. </p>
                                <p> In Melbourne, Juice Earth is the first juice brand that focuses on adding Asian
                                    ingredients health
                                    benefits into our juices.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team text-center section-padding" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">We're a team that adore what we do</h1>
            </div>
        </div>
        <div class="row">
            <div class="team-wrapper">
                <div id="teamSlider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-4 wp5">
                                <img src="img/happy-young-smiling-mestizo-woman-looking-camera-headshot-portrait/4854.jpg"
                                     alt="Team Member" height="190" width="250">
                                <h2>Aretha Loke</h2>
                                <p>Chief Product Officer</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 wp5 delay-05s">
                                <img src="img/serious-successful-young-businessman-standing-office-looking-camera/4223.jpg"
                                     alt="Team Member" height="190" width="250">
                                <h2>Minh Nguyen</h2>
                                <p>Chief Technical Officer</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 wp5 delay-1s">
                                <img src="img/cheerful-beautiful-woman-looking/20846.jpg" alt="Team Member" height="190"
                                     width="250">
                                <h2>Daphne Seah</h2>
                                <p>Chief Security Officer</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-4 wp5">
                                <img src="img/mand-holding-cup/OTSOUE0.jpg" alt="Team Member" height="190" width="250">
                                <h2>Isthi Irfan</h2>
                                <p>Chief Marketing Officer</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 wp5 delay-05s">
                                <img src="img/confident-beautiful-young-businesswoman-looking-camera-head-shot-portrait/4928.jpg"
                                     alt="Team Member" height="190" width="250">
                                <h2>Cersei Lannister</h2>
                                <p>Sales Representative</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 wp5 delay-1s">
                                <img src="img/handsome-male-cyclist-wearing-helmet-looking-away/387349-PC49Y2-243.JPG"
                                     alt="Team Member"
                                     height="190" width="250">
                                <h2>Johnny Alle</h2>
                                <p>Delivery Team Manager</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="ignite-cta text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="product_catalogue.php" class="ignite-btn">Order Now</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div id="footerContainer">
        <div class="footerColumn">
            <span class="footerTitle" style="font-size: 18px; font-weight: 900">Juice Earth</span>
            <span class="footerItems" style="font-weight: bold;">We're a team that<br>adore what we do</span>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Explore</span>
            <a class="footerItems" href="index.php">Home</a>
            <a class="footerItems" href="product_catalogue.php">Shop</a>
            <a class="footerItems" href="aboutus.php">About Us</a>
            <a class="footerItems" href="contactus.php">Contact Us</a>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Visit</span>
            <span class="footerItems">124 La Trobe St,<br>Melbourne<br>VIC 3000</span>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Follow</span>
            <a class="footerItems">Instagram</a>
            <a class="footerItems">Facebook</a>
            <a class="footerItems">Twitter</a>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Legal</span>
            <a class="footerItems">Privacy</a>
        </div>
    </div>
    <div class="genericContainer" id="copyrightFooter">
        <p>&copy; 2019 Juice-Earth Ltd.</p>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/waypoints.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/modernizr.js"></script>
</body>
</html>
