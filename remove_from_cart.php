<?php
include 'db_conn.php';

// Check for remove action
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $remove_sql = "DELETE FROM cart WHERE product_id = ?";
    $remove_stmt = $conn->prepare($remove_sql);
    $remove_stmt->bind_param("i", $product_id);
    $remove_stmt->execute();

    // Redirect to the same page to avoid re-submitting the form on refresh
    header("Location: cart.php");
    exit;
}
?>