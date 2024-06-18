<?php
session_start();
include 'db_conn.php';

 //Fetch cart items for the user
/*$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) {
    echo "User not logged in"; // Properly handle this in a real application
    exit;
}*/
if(!isset($_SESSION['id']))
                echo NULL;
            else {
                $user_id = $_SESSION['id'];
            }

$sql = "SELECT c.product_id, c.qty, c.total, p.name, p.image_url, p.price
FROM cart c
JOIN (
    SELECT product_id , NAME, image_url, price, category FROM mobiles
    UNION ALL
    SELECT product_id , NAME, image_url, price, category FROM headphones
    UNION ALL
    SELECT product_id , name, image_url, price, category FROM chargers
) p ON c.product_id = p.product_id AND c.category = p.category
WHERE c.user_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$items = [];
$subtotal = 0;
while ($row = $result->fetch_assoc()) {
    $items[] = $row;
    $subtotal += $row['total'];
}
$tax = $subtotal * 0.05; // Assume 5% tax
$total = $subtotal + $tax;

// HTML and PHP mixed
?>
<!DOCTYPE html>
<html lang="en">

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
    <div class="small-container cart-page">
        <table>
            <tbody>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="Product Image">
                            <div>
                                <h4><?php echo htmlspecialchars($item['name']); ?></h4>
                                <br>
                                <h5>Price: $<?php echo number_format($item['price'], 2); ?></h5>
                                <br>
                                    <a href="remove_from_cart.php?action=remove&product_id=<?php echo $item['product_id']; ?>">remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="text" value="<?php echo $item['qty']; ?>"></td>
                    <td>$<?php echo number_format($item['total'], 2); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo number_format($subtotal, 2); ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$<?php echo number_format($tax, 2); ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$<?php echo number_format($total, 2); ?></td>
                </tr>
            </table>
        </div>
        <form action="checkouthandler.php" method="post">
            <input type="hidden" name="totalAfterTax" value="$<?php echo number_format($total, 2); ?>">
        <input type="submit" class="cart-btn btn" name="checkOut" value="CheckOut"/><br/>
        </form>
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
