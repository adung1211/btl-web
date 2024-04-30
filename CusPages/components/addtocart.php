<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id']; // Get product_id from form
    $product_name = $_POST['product_name']; // Get product_name from form
    $product_price = $_POST['product_price']; // Get product_price from form
    $product_image = $_POST['product_image']; // Get product_image from form
    $product_quantity = $_POST['product_quantity']; // Get product_quantity from form

    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); // Initialize cart array in session if it doesn't exist
    }

    if(array_key_exists($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$product_id]['quantity'] += $product_quantity; // Increase quantity if product already exists in cart
    } else {
        $_SESSION['cart'][$product_id] = array('name' => $product_name, 'price' => $product_price, 'image' => $product_image, 'quantity' => $product_quantity); // Add product to cart
    }

    header("Location: ../pages/cart.php"); // Redirect to cart page
}
?>