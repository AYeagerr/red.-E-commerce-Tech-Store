<?php
session_start();
include 'db_conn.php';

if(!isset($_SESSION['id']))
                echo NULL;
            else {
                $user_id = $_SESSION['id'];
            }

// Calculate total price from the cart
$sql = "SELECT SUM(total) as total_price FROM cart WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$total_price = $row['total_price'] + $row['total_price'] * 0.05;

// Insert into invoice_header
$sql = "INSERT INTO invoice_header (customer_id, total, ddate) VALUES (?, ?, NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("id", $user_id, $total_price);
$stmt->execute();
$invoice_id = $stmt->insert_id;

// Retrieve items from cart along with their prices from the product table
$sql = "SELECT product_id, qty, total , category , color
        FROM cart 
        WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Insert items into invoice_details
while ($row = $result->fetch_assoc()) {
    $total = $row['total']; // Use the price from the product table
    $sql = "INSERT INTO invoice_details (inv_header, product_id, qty, total , category , color) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_detail = $conn->prepare($sql);
    $stmt_detail->bind_param("iiidss", $invoice_id, $row['product_id'], $row['qty'], $total , $row['category'] , $row['color']);
    $stmt_detail->execute();
}

// Clear the cart
$sql = "DELETE FROM cart WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

// Redirect to confirmation page or show message
header("Location: index.php");
exit();
?>
