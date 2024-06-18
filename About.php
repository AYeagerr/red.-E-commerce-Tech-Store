<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>red.</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="Images/Logo.png">
    <style>
        .us {
            margin-bottom: 10px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
</head>

<?php session_start(); ?>

<?php
// Database connection setup
$conn = new mysqli('localhost', 'root', '', 'red');

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<body id="About">
    <div class="navbar">
        <div class="logo-top">
            <a href="index.php">
                <h1>red.</h1>
            </a>
        </div>
        <nav> <!-- Navigation Bar -->
            <ul id="menuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#categories">Products</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#footer">Contact</a></li>
                
                
            <li ><a  href=<?php
            if(!isset($_SESSION['user_name']))
            echo '"login.php">Login';
        else {
            echo '"#"onclick="togglemenu()">Account';}
            ?></a></li>
                
            </ul>
<div class="sub-menu-wrap" id="subMenu" style="position: absolute;
  top:100%;
  right:2%;
  width:320px;
  max-height:0px;
  overflow:hidden;
  transition:max-height 0.3s;
  
  
  ">
    <div class="sub-menu" style="background: #fff;
  padding: 20px;
  margin: 10px;
  ">
        <div class="user-info" style="display:flex;
        align-items:center;"> 
            <h3 ><?php 
                if(!isset($_SESSION['user_name']))
                echo NULL;
            else {
                echo $_SESSION['user_name'];
            }
                ?></h3>
        </div>
        <hr style="border:1;
        height:1px;
        width:100;
        backround:#ccc;
        margin:15px 0 10px;
        color:#ff1e00;">
        <span style="font-weight: 600;display:flex;">email:</span>
         <span style="position:absolute;left:90px;bottom: 107px;
         color:black;"><?php 
                if(!isset($_SESSION['user_name']))
                echo NULL;
            else {
                echo $_SESSION['email'];
            }
                ?></span>
                <br>
                <span style="font-weight: 600;display:flex;">created at:</span>
                <span style="position:absolute;left:126px;bottom: 69px;color:black;"><?php 
                if(!isset($_SESSION['user_name']))
                echo NULL;
            else {
                echo $_SESSION['created_at'];
            }
                ?></span>
                <br>
                <a href="logout.php" style="display:flex; 
         color:black; position:relative; left: 105px; color:#ff1e00; font-weight: 700;"
  transition: 0.2s;">logout</a>
        </div>
        </div>

        </nav>

        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <i class="fa-solid fa-bars" onclick="menutoggle()"></i>
    </div>

    <!-- ---------------------------Testimonial---------------------- -->
    <h2 class="title" style="margin-bottom: 40px; margin-top: 40px;"><span style="color: red;">red.</span> Team</h2>

    <div class="small-container">
        <div class="row">
            <div class="col-4">

                <img src="Images/Saul.jpg" class="us">
                <h3 style="text-align: center;">Abdulrhman Mohamed</h3>
            </div>
            <div class="col-4">

                <img src="Images/Saul.jpg" alt="" class="us">
                <h3 style="text-align: center;">Ali Mohamed</h3>
            </div>
            <div class="col-4">

                <img src="Images/Saul.jpg" alt="" class="us">
                <h3 style="text-align: center;">Ahmed Mohamed</h3>
            </div>
            <div class="col-4">

                <img src="Images/Saul.jpg" alt="" class="us">
                <h3 style="text-align: center;">Amer Ashoush</h3>
            </div>
        </div>
    </div>

    <section>
        <h1 class="title" style="margin-bottom: 10px;">Supervision</h1>
        <h2 style="text-align: center; margin: 30px;">Dr. Diaa</h2>
        <h2 style="text-align: center; margin: 30px;">Eng. Moheeb</h2>
    </section>
    <!-----------Footer---------------->

     <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App!</h3>
                    <p>Available for Android and IOS</p>
                    <div class="app-logo">
                        <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                            alt="">
                        <img src="https://developer.apple.com/assets/elements/icons/download-on-the-app-store/download-on-the-app-store.svg"
                            alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <div class="logo">
                        <h1><a href="index.php" style="color: #ff1e00;">
                
           red. </a></h1>
                    </div>
                    <p>Where Innovation Meets Excellence.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        
                        <li><a href="About.php">About Us!</a></li>
                        <li><a  href=<?php
            if(!isset($_SESSION['user_name']))
            echo '"login.php">Login';
        else {
            echo '"#"onclick="togglemenu()">Account';}
            ?></a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us!</h3>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></a></i></li>
                        <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2024 - Team <span style="color: red;">red.</span></p>
        </div>
    </div>

    <!--JS for Menu-->

    <script>
        var menuItems = document.getElementById("menuItems");

        menuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuItems.style.maxHeight == "0px") {
                menuItems.style.maxHeight = "200px"
            }
            else {
                menuItems.style.maxHeight = "0px"
            }
        }

        let subMenu=document.getElementById("subMenu");
        function togglemenu(){
            if (subMenu.style.maxHeight == "0px") {
                subMenu.style.maxHeight="400px"
            }
            else {
                subMenu.style.maxHeight = "0px"
            }
        }
    </script>
</body>

</html>