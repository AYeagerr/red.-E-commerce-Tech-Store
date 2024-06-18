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
        marquee {
            background-color: black;
            color: red;
            height: 50px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
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

$sql = "
(SELECT product_id, 'mobile' as type, NAME, price, description, category, stock, image_url, created_at FROM mobiles ORDER BY created_at DESC LIMIT 3)
UNION ALL
(SELECT product_id, 'headphone' as type, NAME, price, description, category, stock, image_url, created_at FROM headphones ORDER BY created_at DESC LIMIT 3)
UNION ALL
(SELECT product_id, 'charger' as type, NAME, price, description, category, stock, image_url, created_at FROM chargers ORDER BY created_at DESC LIMIT 3)
ORDER BY created_at DESC";

$result = $conn->query($sql);
if (!$result) {
    die("SQL error: " . $conn->error . "\nQuery: " . $sql);
}


// Fetch four random products from the database
$randomSql = "SELECT * FROM mobiles ORDER BY RAND() LIMIT 4";
$randomResult = $conn->query($randomSql);

// Check for errors in random product fetch
if (!$randomResult) {
    die('Error fetching random products: ' . $conn->error);
}
?>

<body id="home">
    <div class="navbar">
        <div class="logo-top">
            <a href="#home">
                <h1>red.</h1>
            </a>
        </div>
        <nav> <!-- Navigation Bar -->
            <ul id="menuItems">
                <li><a href="#home">Home</a></li>
                <li><a href="#categories">Products</a></li>
                <li><a href="About.php">About</a></li>
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
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <i class="fa-solid fa-bars" onclick="menutoggle()"></i>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                <h1>Welcome to <span>red.</span> <?php 
                if(!isset($_SESSION['user_name']))
                echo NULL;
            else {
                echo $_SESSION['user_name'];
            }
                ?></h1>
                    <p>Where Innovation Meets Excellence.</p>
                    <a href="#categories" class="btn">Explore Now</a>
                </div>
                <div class="col-2">
                    <img src="Images/Devices-amico.png" alt="img">
                    <!--<a href="https://storyset.com/technology">Technology illustrations by Storyset</a>-->
                </div>
            </div>
        </div>
    </div>
    <marquee behavior="" direction="" scrollamount="10">30% off on Chargers | 40% off on Headphones | 10% off on Mobiles </marquee>
    <!--Categories -->
    <div class="categories" id="categories">
        <h2 class="title">Categories</h2>
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <a href="Mobiles.php">
                        <img src="Images/Pocketbook - Stats illustration.gif" alt="img">
                    </a>
                </div>
                <div class="col-3">
                    <a href="Headphones.php">
                        <img src="Images/headphones.gif" alt="img">
                    </a>
                </div>
                <div class="col-3">
                    <a href="Chargers.php">
                        <img src="Images/Battery Animation.gif" alt="img">
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- Featured Products -->
    <h2 class="title" id="products">Featured Products</h2>
    <div class="small-container">
        <div class="row">
            <?php if ($randomResult->num_rows > 0): ?>
                <?php while ($row = $randomResult->fetch_assoc()): ?>
                    <div class="col-4">
                        <a href="Mobile details.php?product_id=<?php echo $row['product_id']; ?>"><img
                                src="<?php echo $row['image_url']; ?>" alt="Product Image"></a>
                        <h4><?php echo htmlspecialchars($row['NAME']); ?></h4>
                        <p style="color: green; font-weight: bold"><?php echo number_format($row['price'], 2); ?> LE</p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products available.</p>
            <?php endif; ?>
        </div>


        <!-- Latest Products -->

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php
                    $page = '';
                    switch ($row['type']) {
                        case 'mobile':
                            $page = 'Mobile details.php';
                            break;
                        case 'headphone':
                            $page = 'Headphones details.php';
                            break;
                        case 'charger':
                            $page = 'Chargers Details.php';
                            break;
                    }
                    ?>
                    <div class="col-4">
                        <a href="<?php echo $page; ?>?product_id=<?php echo $row['product_id']; ?>"><img
                                src="<?php echo $row['image_url']; ?>" alt="Product Image"></a>
                        <h4><?php echo htmlspecialchars($row['NAME']); ?></h4>
                        <p style="color: green; font-weight: bold"><?php echo number_format($row['price'], 2); ?> LE</p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products available.</p>
            <?php endif; ?>
        </div>
    </div>

    <!------------------------------Offers-------------------------->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="https://res.cloudinary.com/mozillion/image/upload/f_auto,q_auto/v1697021433/jmncobzs0zwralopizbx.png"
                        class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on red.</p>
                    <h1>Google Pixel 8 Pro Obsidian</h1>
                    <small>Pixel 8 Pro is the all-pro phone engineered by Google; it’s super fast, powerful, and secure,
                        with the new Google Tensor G3 chip that’s custom-designed with Google AI for cutting-edge photo
                        and video</small>
                    <a href="Mobile details.php?product_id=4" class="btn">Buy Now!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------Testimonial---------------------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>"Red's online tech store offers a seamless shopping experience. Their user-friendly website makes
                        finding gadgets a breeze. I reached out with a query and received prompt, helpful support. With
                        fast shipping, my order arrived in perfect condition. Red is my go-to for tech needs."</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="Images/Gus.png" alt="" style="margin-bottom: 10px;">
                    <h3>Gus Fring</h3>
                </div>
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>"Red has been my tech go-to for years. Their wide range of products suits every need. Quality is
                        consistent – everything I've bought exceeds expectations. Competitive prices and regular
                        discounts sweeten the deal. Red is a top choice for tech enthusiasts."</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="Images/Walter.jpg" alt="" style="margin-bottom: 10px;">
                    <h3>Walter H. White</h3>
                </div>
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>"Red's online store is a tech lover's dream. Navigating their sleek website is easy, and their
                        support team is quick and helpful. Orders arrive swiftly, and the products consistently impress
                        with their quality. Red is my trusted destination for all things tech."</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="Images/Saul.jpg" alt="" style="margin-bottom: 10px;">
                    <h3>Saul Goodman</h3>
                </div>
            </div>
        </div>
    </div>

    <!--Brands-->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <a href="https://www.oneplus.com/global" target="_blank"><img
                            src="https://www.oneplus.com/content/dam/oasis/page/common/logo/OnePlus_Logo.png"
                            alt=""></a>
                </div>
                <div class="col-5">
                    <a href="https://www.google.com/" target="_blank"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png"
                            alt=""></a>
                </div>
                <div class="col-5">
                    <a href="https://www.samsung.com/global/galaxy/" target="_blank"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/2560px-Samsung_Logo.svg.png"
                            alt=""></a>
                </div>
                <div class="col-5">
                    <a href="https://electronics.sony.com/c/mobile" target="_blank"><img
                            src="https://seekvectorlogo.com/wp-content/uploads/2018/01/sony-vector-logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

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
                        <h1><a href="#home" style="color: #ff1e00;">
                
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