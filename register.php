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
                <li><a href="#categories">Products</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="#footer">Contact</a></li>
                
                
            <li ><a  href=<?php
            if(!isset($_SESSION['user_name']))
            echo NULL;
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
  margin: 10px;">
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
                     




<div id="RegForm">
<span>Register</span> 
<div id="Indicator"></div>
     <form action="register-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
            
     		<h5 style="color: #ff523b;"><?php echo $_GET['error']; ?></h5>
        
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <h5 style="color: green;"><?php echo $_GET['success']; ?></h5>
          <?php } ?>

          
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"  name="uname" placeholder="User Name"  value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" name="uname" placeholder="User Name">
          <?php }?>

          <?php if (isset($_GET['email'])) { ?>
               <input type="email" name="email" placeholder="email" value="<?php echo $_GET['email']; ?>">
          <?php }else{ ?>
               <input type="email" name="email" placeholder="email">
          <?php }?>

     	<input type="password" name="password" placeholder="Password">


     	<button type="submit" class="btn">Register</button>
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