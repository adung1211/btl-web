<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id']; // Get product_id from form
    $product_name = $_POST['product_name']; // Get product_name from form
    $product_price = $_POST['product_price']; // Get product_price from form
    $product_image = $_POST['product_image']; // Get product_image from form

    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); // Initialize cart array in session if it doesn't exist
        $_SESSION['cartcount'] = 1;
        array_push($_SESSION['cart'], array('id' => $product_id, 'name' => $product_name, 'price' => $product_price, 'image' => $product_image, 'quantity' => 1));
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    else{
        
        $_SESSION['cartcount'] +=1;
        foreach ($_SESSION['cart'] as $key => $product) {
            if ($product['id'] == $product_id) {
                // Update quantity if product is already in cart
                $_SESSION['cart'][$key]['quantity'] += 1;
                header("Location: " . $_SERVER['HTTP_REFERER']); // Redirect to cart page
                exit();
            }
        }

        //push to cart
        array_push($_SESSION['cart'], array('id' => $product_id, 'name' => $product_name, 'price' => $product_price, 'image' => $product_image, 'quantity' => 1));

        //header("Location: ../pages/cart.php"); // Redirect to cart page
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
?>