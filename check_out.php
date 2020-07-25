<!doctype html>
<html class="no-js" lang="">
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
    <title>Juice-Earth</title>
    <meta name="description" content="Juice Earth - Rmit E Business Systems">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
    <script src="js/main.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 8px;
            border-radius: 10px;
        }

        .container {
            background-color: #EBEBEB;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 6px;
        }

        .checkout-info {
            padding-left: 20px;
            padding-bottom: 20px;
        }

        input[type=text] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body style="font-family: 'Lato', sans-serif">
<nav>
    <div style="z-index:100; position: relative; display: flex; align-items: center;">
        <a href="index.php">
            <img src="img/logo-new.png" alt="Juice Earth Logo" style="height:80px; padding: 5px;">
        </a>
    </div>
    <div id="menuItemsContainer" style="min-width: fit-content; text-decoration: none; position: absolute">
        <a href="index.php"><span class="menuItem" style="color: black;">HOME</span></a>
        <a href="product_catalogue.php"><span class="menuItem">SHOP</span></a>
        <a href="aboutus.php"><span class="menuItem">ABOUT US</span></a>
        <a href="contactus.php"><span class="menuItem" id="menuLastElement">CONTACT US</span></a>
    </div>
    <div id="cartIconContainer">
        <a href="cart.php">
            <span id="cartCounter">0</span>
            <img src="img/shopping-cart-128.png" alt="Shopping Cart" style="height:45px;">
        </a>
    </div>
</nav>
<h2 style="text-align: center">Checkout Form</h2>
<div class="row">
    <div class="col-75">

        <div class="checkout-info">
            <form action="http://titan.csit.rmit.edu.au/~s3581439/ebusiness/paymentConfirmation.php" method="post">
                <div class="row">
                    <div class="col-50">
                        <h3>Shipping Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" required="required">

                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" required="required">

                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" required="required">

                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" required="required">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" required="required">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" required="required">

                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" required="required">

                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" required="required">

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" required="required">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" required="required">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Billing address same as Shipping
                </label>
                <input type="submit" value="Pay" class="btn">
            </form>
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
            <span class="footerTitle">Additional Features</span>
            <a class="footerItems">Email Newsletter Subscribe</a><a class="footerItems">Contact Us Feature</a>
        </div>
    </div>
    <div class="genericContainer" id="copyrightFooter">
        <p>&copy; 2019 Juice-Earth Ltd.</p>
    </div>
</footer>
</body>
</html>

