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
        $notifications = array_reverse($notifications);
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
            }
        }
    
        return [
            'totalOrders' => $pending + $shipped + $processing + $shipping,
            'cancelled' => $cancelled,
            'pending' => $pending,
            'shipped' => $shipped,
            'processing' => $processing,
            'totalSpend' => $totalSpend,
        ];
    }

    function getAllProducts($sortColumn = null, $sortOrder = null) {
        global $link;
    
        $sql = "SELECT * FROM products";
        if ($sortColumn && $sortOrder) {
            $sql .= " ORDER BY " . $sortColumn . " " . $sortOrder;
        }
        $result = mysqli_query($link, $sql);
    
        return $result;
    }
    
    function getProductsByCategory($category, $sortColumn = null, $sortOrder = null) {
        global $link;
    
        $sql = "SELECT * FROM products WHERE category = '" . mysqli_real_escape_string($link, $category) . "'";
        if ($sortColumn && $sortOrder) {
            $sql .= " ORDER BY " . $sortColumn . " " . $sortOrder;
        }
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
    
    function addReview($userId, $username, $productId, $rating, $comment) {
        global $link;
    
        $sql = "INSERT INTO reviews (user_id, username, product_id, rating, comment) VALUES ($userId, '$username', $productId, $rating, '$comment')";

        mysqli_query($link, $sql);
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

    function getAllReviews($productId) {
        global $link;

        $sql = "SELECT * FROM reviews WHERE product_id = $productId ORDER BY created_at DESC";

        $result = mysqli_query($link, $sql);

        $reviews = array();
        if (mysqli_num_rows($result) > 0) {
            while($review = mysqli_fetch_assoc($result)) {
                $reviews[] = $review;
            }
        }
        mysqli_free_result($result);
        return $reviews;
    }

    function getProductRatings($productId) {
        global $link;
    
        $sql = "SELECT rating, COUNT(*) as count FROM reviews WHERE product_id = $productId GROUP BY rating";
    
        $result = mysqli_query($link, $sql);
    
        $ratings = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);
        $totalRating = 0;
        $numRatings = 0;
    
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $ratings[$row['rating']] = $row['count'];
                $totalRating += $row['rating'] * $row['count'];
                $numRatings += $row['count'];
            }
        }
    
        $averageRating = $numRatings > 0 ? number_format($totalRating / $numRatings, 1) : 0;
    
        mysqli_free_result($result);
    
        return array(
            'averageRating' => $averageRating,
            'totalRating' => $totalRating,
            'numRatings' => $numRatings,
            'ratings' => $ratings
        );
    }
?>