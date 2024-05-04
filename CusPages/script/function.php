<?php
    include '../components/db.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    function login($username, $password) {
        global $link;

        $query = "SELECT * FROM account WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);

        if ($row) {
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $username;
            return true;
        } else {
            return false;
        }
    }


    function register($username, $password) {
        global $link;
        $query = "INSERT INTO account (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $userId = mysqli_insert_id($link);
            $_SESSION['userid'] = $userId;
            $_SESSION['username'] = $username;
            echo "<script>alert('Register success');</script>";
            return true;
        } else {
            return false;
        }
    }

    function getOrdersByUserId($userId) {
        global $link;
    
        $sql = "SELECT * FROM orders WHERE user_id = $userId";
        $result = mysqli_query($link, $sql);
    
        return $result;
    }

    function getOrderDetailsByOrderId($orderId) {
        global $link;

        $sql_details = "SELECT * FROM order_detail WHERE order_id = $orderId";
        $result_details = mysqli_query($link, $sql_details);

        return $result_details;
    }

    function getOrderSummaryByUserId($userId) {
        global $link;

        $sql = "SELECT status, total_money FROM orders WHERE user_id = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $totalSpend = 0;
        $pending = $shipped = $processing = $shipping = $cancelled = 0;
        while ($order = mysqli_fetch_assoc($result)) {
            $totalSpend += $order['total_money'];

            switch ($order['status']) {
                case 'Cancelled':
                    $cancelled++;
                    break;
                case 'Pending':
                    $pending++;
                    break;
                case 'Shipped':
                    $shipped++;
                    break;
                case 'Processing':
                    $processing++;
                    break;
                case 'Shipping':
                    $shipping++;
                    break;
            }
        }

        return [
            'totalOrders' => $pending + $shipped + $processing + $shipping,
            'cancelled' => $cancelled,
            'pending' => $pending,
            'shipped' => $shipped,
            'processing' => $processing,
            'shipping' => $shipping,
            'totalSpend' => $totalSpend,
        ];
    }

    function getProductInfo($productId) {
        global $link;
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

    function insert_order($user_id, $fullname, $email, $phone_number, $address, $note, $order_date, $status, $total_money, $cart) {
        global $link;
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