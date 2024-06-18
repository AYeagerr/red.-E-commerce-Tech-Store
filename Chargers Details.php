<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details - red.</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="Images/Logo.png">
</head>

<?php
// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'red');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch four random products from the database
$randomSql = "SELECT * FROM chargers ORDER BY RAND() LIMIT 4";
$randomResult = $conn->query($randomSql);

// Check for errors in random product fetch
if (!$randomResult) {
    die('Error fetching random chargers: ' . $conn->error);
}

// Below code should be in a separate PHP file or after a specific condition check
// because it is used for fetching details of a single product
if (isset($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']);

    // Fetch main product details
    $sql = "SELECT * FROM chargers WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $productResult = $stmt->get_result();
    $product = $productResult->fetch_assoc();

    if (!$product) {
        die('Product not found');
    } else {
        // Fetch additional images
        $imagesSql = "SELECT image_url FROM charger_images WHERE product_id = ?";
        $imagesStmt = $conn->prepare($imagesSql);
        $imagesStmt->bind_param("i", $product_id);
        $imagesStmt->execute();
        $imagesResult = $imagesStmt->get_result();

        $additionalImages = [];
        while ($img = $imagesResult->fetch_assoc()) {
            $additionalImages[] = $img['image_url'];
        }
    }
}
?>

<body>
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
    <!-- End navigation bar -->


    <!--Start product details-->
    <form action="addToCart.php" method="post">
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="img" id="ProductImg"
                        style="margin-bottom: 20px">
                    <div class="small-img-row">
                        <!-- Primary image thumbnail -->
                        <div class="small-img-col">
                            <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="Main Image"
                                width="100%" class="small-img" onclick="changeImage(this)">
                        </div>
                        <!-- Additional images thumbnails -->
                        <?php foreach ($additionalImages as $image_url): ?>
                            <div class="small-img-col">
                                <img src="<?php echo htmlspecialchars($image_url); ?>" alt="Additional Image" width="100%"
                                    class="small-img" onclick="changeImage(this)">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-2">
                    <!-- Product details and cart addition form continues -->
                    <p>Home / <?php echo htmlspecialchars($product['category']); ?></p>
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                    <h4><?php echo number_format($product['price'], 2); ?> LE</h4>
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($product['price']); ?>">
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($product['category']); ?>">
                    <select name="color">
                        <option value="Red">Red</option>
                        <option value="Midnight">Midnight</option>
                        <option value="Purple">Purple</option>
                        <option value="Starlight">Starlight</option>
                    </select>
                    <input type="number" name="quantity" value="1" min="1"
                        max="<?php echo htmlspecialchars($product['stock']); ?>">
                    <button type="submit" name="add_to_cart" class="btn">Add To Cart</button>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <p><?php echo htmlspecialchars($product['description']); ?></p>
                </div>
            </div>
        </div>
    </form>
    <!--End product details-->
    <!--Start title section-->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related products</h2>
        </div>
    </div>
    <!--End title section-->
    <!-- Start Products section -->
    <div class="small-container">
        <div class="row">
            <?php if ($randomResult->num_rows > 0): ?>
                <?php while ($row = $randomResult->fetch_assoc()): ?>
                    <div class="col-4">
                        <a href="Chargers Details.php?product_id=<?php echo $row['product_id']; ?>"><img
                                src="<?php echo $row['image_url']; ?>" alt="Product Image"></a>
                        <h4><?php echo htmlspecialchars($row['name']); ?></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p><?php echo number_format($row['price'], 2); ?> LE</p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products available.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- End Products section -->
    <!-----------Start Footer---------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App!</h3>
                    <p>Available for Android and IOS</p>
                    <div class="app-logo">
                        <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                            alt>
                        <img src="https://developer.apple.com/assets/elements/icons/download-on-the-app-store/download-on-the-app-store.svg"
                            alt>
                    </div>
                </div>
                <div class="footer-col-2">
                    <div class="logo">
                        <h1>red.</h1>
                    </div>
                    <p>Where Innovation Meets Excellence.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href>Return Policy</a></li>
                        <li><a href>About Us!</a></li>
                        <li><a href>Account</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us!</h3>
                    <ul>
                        <li><a href><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href><i class="fa-brands fa-instagram"></a></i></li>
                        <li><a href><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2024 - Team <span style="color: red">red.</span></p>
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
    <!-- Start JS for product menue-->
    <script>
        var productImg = document.getElementById("Productimg");
        var smallImgs = document.getElementsByClassName("small-img");

        for (let i = 0; i < smallImgs.length; i++) {
            smallImgs[i].onclick = function () {
                productImg.src = this.src; // 'this' refers to the smallImg that was clicked
            };
        }
    </script>


    <!-- End JS for product menue-->
    <script>
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