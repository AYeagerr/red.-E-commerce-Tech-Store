<?php
session_start();
include 'db_conn.php'; // Make sure to include your database connection file

if (isset($_POST['add_to_cart'])) {
   // $userId = $_SESSION['user_id'] ?? session_id();  // Use session_id() for guest users or a logged-in user session variable
   
   if(!isset($_SESSION['id']))
                echo NULL;  
            else {
                $user_id = $_SESSION['id'];
            }
if ($user_id === null) {
    echo "<script>alert('User not logged in');</script>";
    header("Location: login.php");
    die; 
}
   $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $colorr = $_POST['color'];
    $totalPrice = $quantity * $price;  // Calculate total price

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, qty, total, category , color) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiidss", $user_id, $productId, $quantity, $totalPrice , $category , $colorr);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Product added to cart!');</script>";
        echo "<script>window.location.href='cart.php';</script>";  // Redirect to cart page or display message
    } else {
        echo "<script>alert('Error adding product to cart');</script>";
    }
}
?>
