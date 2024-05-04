<?php
    include '../components/db.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    function login($username, $password) {
        global $link;
    
        $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($link, $query);
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
        $query = "INSERT INTO account (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($link, $query);
        if ($result) {
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
    
    function getNotificationsByUserId($userId) {
        global $link;
    
        $sql = "SELECT * FROM notifications WHERE user_id = $userId";
        $result = mysqli_query($link, $sql);
    
        $notifications = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $notifications[] = $row;
        }
    
        return $notifications;
    }

    function getOrderDetailsByOrderId($orderId) {
        global $link;

        $sql_details = "SELECT * FROM order_detail WHERE order_id = $orderId";
        $result_details = mysqli_query($link, $sql_details);

        return $result_details;
    }

    function getOrderSummaryByUserId($userId) {
        global $link;
    
        $sql = "SELECT status, total_money FROM orders WHERE user_id = $userId";
        $result = mysqli_query($link, $sql);
    
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

    function getAllProducts() {
        global $link;
    
        $sql = "SELECT * FROM products";
        $result = mysqli_query($link, $sql);
    
        return $result;
    }

    function getProductInfo($productId) {
        global $link;
        $sql = "SELECT * FROM products WHERE id = $productId";
        $result = mysqli_query($link, $sql);
    
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

    function markNotificationAsRead($id) {
        global $link;
        $sql = "UPDATE notifications SET read_status = 1 WHERE id = $id";
        $result = mysqli_query($link, $sql);
        return mysqli_affected_rows($link);
    }
    function markAllNotificationsAsRead($userId) {
        global $link;
        $sql = "UPDATE notifications SET read_status = 1 WHERE user_id = $userId";
        mysqli_query($link, $sql);
    }
?>