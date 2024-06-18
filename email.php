<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - red.</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Styles/all.min.css">
    <link rel="icon" type="image/png" href="Images/Logo.png">
</head>

<body>
    <!-- Start navigation bar -->
    <div class="navbar">
        <div class="logo-top">
           <a href="index.php"><h1>red.</h1></a>
        </div>
        <nav> <!-- Navigation Bar -->
            <ul id="menuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#categories">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="#footer">Contact</a></li>
                
            </ul>
        </nav>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <i class="fa-solid fa-bars" onclick="menutoggle()"></i>
    </div>
    <!-- End navigation bar -->

    <!-- Start account-page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="Images/Devices-amico.png" width="100%" alt="img">
                </div>

                <div class="col-2">
                    <div class="form-container">
                     




<div id="EmailForm">
<span>Forgot Password</span> 
<div id="Indicator"></div>
     <form action="email-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
            
     		<h5 style="color: #ff523b;"><?php echo $_GET['error']; ?></h5>
        
     	<?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <h5 style="color: green;"><?php echo $_GET['success']; ?></h5>
        <?php } ?>

         

          
          
               
          
               <input type="email" name="email" placeholder="email">
          
            <input type="password" name="password" placeholder="Password">

     	


     	<button type="submit" class="btn">Reset</button>
         
        <a href="register.php" class="ca">Create an account?</a><br>
        <a href="login.php" class="ca">Already have an account?</a>


        </form>
    </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-----------Start Footer---------------->
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
    <!-----------End Footer---------------->

    <!-- Start JS for Menu-->
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
    </script>
    <!-- End JS for Menu-->

    <!-- Start JS fot toggle Form-->
    <script>var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>


    <!-- End JS fot toggle Form-->

    

</body>

</html>