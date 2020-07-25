<!DOCTYPE html>
<html lang="en">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
    <title>Our Packages</title>
</head>


<body>

<!--- Logo -->
<div style="z-index:100;">
    <h1>
        <a href="index.php">
            <img src="images/logo.png" alt="Juice Earth Logo" style="height:80px;padding-left:10px;">
        </a>
        <a href="index.php">
            <STYLE>A {
                    text-decoration: none;
                    font-family: sans-serif;
                    color: teal;
                } </STYLE>
            Juice Earth</font></a>
    </h1>
</div>

<!--- Navigational Bar to be added later -->

<!--- Shop/Product Catalogue -->
<h2 style="margin-top: 40px; text-align: center; font-family: sans-serif; font-size: 15mm;" ;>
    OUR PACKAGES
</h2>

<style>
    div.package-list {
        list-style-type: none;
        margin-left: 100px;
        margin-right: 100px;
        padding-left: 30px;
        min-width: 1230px;
        display: inline-block;
        border-bottom-style: groove;
        border-width: 5px;
    }

    .package-list img {
        width: 60%;
        height: auto;
        float: left;
    }

    .package-list.desc {
        padding: 100px;
        text-align: left;
        font-size: 18px;
    }

    .package-list.price {
        margin-top: 10px;
        font-size: 20px;
    }

    .package-list h3 {
        display: inline-block;
        margin-top: 50px;
        text-align: center;
        margin-right: 30px;
        font-size: 28px;
        padding: 0;
    }

    .package-list p {
        display: inline-block;
        margin-top: 50px;
        text-align: center;
        margin-right: 30px;
        padding: 0;
        font-size: 18px;
    }

    .package-list p.price {
        display: inline-block;
        margin-top: 50px;
        text-align: center;
        margin-right: 30px;
        padding: 0;
        font-size: 22px;
    }

</style>

<style>
    .dropbtn {
        background-color: #4CAF50;
        margin-bottom: 5px;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #9afa8d;
        width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #faf600
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>

<div class="package-list">

    <a target="_blank" href="morning_cleanse.php">
        <img src="images/morning_cleanse.png" alt="morning_cleanse">
    </a>
    <h3 style="margin-left: 20px"><a href="morning_cleanse.php">Morning Cleanse</a></h3><br/>
    <p class="desc" ; style="margin-left: 20px">Once daily for a healthier and happier life</p> <br/>
    <p class="price" style="margin-left: 20px; text-align: center; font-weight: bold">AU $125 (NOT Including Delivery
        Fees)</p><br/><br/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: gold;
        }
    </style>
    <span class="fa fa-star checked" ; style="margin-left: 20px"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span> (268 reviews)

    <div class="dropdown">
        <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
        <div class="dropdown-content">
            <a href="morning_cleanse.php">See More Details</a>
            <a href="#">Add To Cart</a>
        </div>
    </div>
</div>
<br/>


<div class="package-list">

    <a target="_blank" href="penta_delight.php">
        <img src="images/penta_delight.png" alt="penta_delight">
    </a>
    <h3 style="margin-left: 20px">
        <a href="penta_delight.php">Penta Delight</a></h3><br/>
    <p class="desc" ; style="margin-left: 20px">The delight from five iconic fruits of JuiceEarth</p> <br/>
    <p class="price" style="margin-left: 20px; text-align: center; font-weight: bold">AU $120 (NOT Including Delivery
        Fees)</p><br/><br/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: gold;
        }
    </style>
    <span class="fa fa-star checked" ; style="margin-left: 20px"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span> (163 reviews)

    <div class="dropdown">
        <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
        <div class="dropdown-content">
            <a href="penta_delight.php">See More Details</a>
            <a href="#">Add To Cart</a>
        </div>
    </div>
</div>


<div class="package-list">

    <a target="_blank" href="detoxes.php">
        <img src="images/detoxes.png" alt="detoxes">
    </a>
    <h3 style="margin-left: 20px"><a href="detoxes.php">Detoxes</a></h3><br/>
    <p class="desc" ; style="margin-left: 20px">A great choice of detoxification with five natural juices</p> <br/>
    <p class="price" style="margin-left: 20px; text-align: center; font-weight: bold">AU $130 (NOT Including Delivery
        Fees)</p><br/><br/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: gold;
        }
    </style>
    <span class="fa fa-star checked" ; style="margin-left: 20px"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span> (145 reviews)

    <div class="dropdown">
        <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
        <div class="dropdown-content">
            <a href="detoxes.php">See More Details</a>
            <a href="#">Add To Cart</a>
        </div>
    </div>
</div>


<div class="package-list">

    <a target="_blank" href="rainbow_europhia.php">
        <img src="images/rainbow_europhia.jpg" alt="rainbow_europhia">
    </a>
    <h3 style="margin-left: 20px"><a href="rainbow_europhia.php">Rainbow Europhia</a></h3><br/>
    <p class="desc" ; style="margin-left: 20px">The intense happiness coming from natural ingredients</p> <br/>
    <p class="price" style="margin-left: 20px; text-align: center; font-weight: bold">AU $135 (NOT Including Delivery
        Fees)</p><br/><br/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: gold;
        }
    </style>
    <span class="fa fa-star checked" ; style="margin-left: 20px"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span> (236 reviews)

    <div class="dropdown">
        <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
        <div class="dropdown-content">
            <a href="rainbow_europhia.php">See More Details</a>
            <a href="#">Add To Cart</a>
        </div>
    </div>
</div>


<div class="package-list">

    <a target="_blank" href="immunity_boost.php">
        <img src="images/immunity_boost.jpg" alt="images/immunity_boost" ; style="margin-left: 0px">
    </a>
    <h3 style="margin-left: 20px"><a href="immunity_boost.php">Immunity Boost</a></h3><br/>
    <p class="desc" ; style="margin-left: 20px; font-size: 16px">Enhance your immune system with the nutrients of these
        six juices</p> <br/>
    <p class="price" style="margin-left: 20px; text-align: center; font-weight: bold">AU $130 (NOT Including Delivery
        Fees)</p><br/><br/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: gold;
        }
    </style>
    <span class="fa fa-star checked" ; style="margin-left: 20px"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span> (170 reviews)

    <div class="dropdown">
        <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
        <div class="dropdown-content">
            <a href="immunity_boost.php">See More Details</a>
            <a href="#">Add To Cart</a>
        </div>
    </div>
</div>


<div class="package-list">

    <a target="_blank" href="fruity_deluxe.php">
        <img src="images/fruity_deluxe.png" alt="fruity_deluxe">
    </a>
    <h3 style="margin-left: 20px"><a href="fruity_deluxe.php">Fruity Deluxe</a></h3><br/>
    <p class="desc" ; style="margin-left: 20px">Enjoy the legendary feeling from three special smoothies</p> <br/>
    <p class="price" style="margin-left: 20px; text-align: center; font-weight: bold">AU $115 (NOT Including Delivery
        Fees)</p><br/><br/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: gold;
        }
    </style>
    <span class="fa fa-star checked" ; style="margin-left: 20px"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span> (188 reviews)

    <div class="dropdown">
        <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
        <div class="dropdown-content">
            <a href="fruity_deluxe.php">See More Details</a>
            <a href="#">Add To Cart</a>
        </div>
    </div>
</div>

</body>
