<?php
    function getProductInfo($link, $productId) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "i", $productId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    function insert_order($link, $user_id, $fullname, $email, $phone_number, $address, $note, $order_date, $status, $total_money, $cart) {
        $sql = "INSERT INTO orders (user_id, full_name, email, phone_number, address, note, order_date, status, total_money) VALUES ($user_id, '$fullname', '$email', '$phone_number', '$address', '$note', '$order_date', '$status', $total_money)";

        if(mysqli_query($link, $sql)){
            $last_id = mysqli_insert_id($link);
            foreach ($cart as $product) {
                $product_id = $product['id'];
                $quantity = $product['quantity'];
                $price = $product['price'];
                $total = $quantity * $price;
                $sql = "INSERT INTO order_detail (order_id, product_id, quantity, price, total_price) VALUES ($last_id, $product_id, $quantity, $price, $total)";
                mysqli_query($link, $sql);
            }
            return true;
        } else {
            return false;
        }
    }
?>