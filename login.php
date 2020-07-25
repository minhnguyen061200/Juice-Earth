<!doctype html>
<html class="no-js" lang="">
<?php
// Always start this first
session_start();

if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Verify user password and set $_SESSION
        if ($_POST['username'] == 'inte' && $_POST['password'] == '2047') {
            $_SESSION['username'] = 'success';
	    header("Location: http://titan.csit.rmit.edu.au/~s3581439/ebusiness/index.php");
        } else {
          echo "<h2 style=\"text-align:center; color:red;\">Invalid Login Details</h2>";
        }
    }
}
?>
<head>

  <meta charset="utf-8">
  <title>Juice-Earth</title>
  <meta name="description" content="Juice Earth - Rmit E Business Systems">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <meta name="theme-color" content="#fafafa">
</head>
<body>
<script src="js/main.js"></script>
<!--- Top Navigation Part -->
<nav>
  <div style="z-index:100; display: flex; align-items: center;">
    <a href="index.php">
      <img src="img/logo-new.png" alt="Juice Earth Logo" style="height:80px; padding: 5px;">
    </a>
  </div>
</nav>
</div>
<div style="display: flex;
    max-width: 50vw;
    align-items: center;
    margin: auto;
    padding-top: 100px;">
  <form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required style="min-height: 31px;
    border-radius: 4px;
    min-width: 264px;
    padding: 12px;">
    <input type="submit" value="Submit">
  </form>
</div>
<!--- End Top Navigation Part -->
</body>
</html>
