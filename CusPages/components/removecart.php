<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];

    foreach ($_SESSION['cart'] as $key => $product) {
        if ($product['id'] == $product_id) {
            $_SESSION['cart'][$key]['quantity'] -= 1;
            if ($_SESSION['cart'][$key]['quantity'] == 0) {
                unset($_SESSION['cart'][$key]);
            }
            $_SESSION['cartcount'] -= 1;
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}
?>