<?php
    include "../components/db.php";
    include '../script/function.php';
    session_start();

    $user_id = $_SESSION['userid']; // Assuming the user_id is stored in the session
    $sql = "SELECT * FROM orders WHERE user_id = $user_id";
    $result = mysqli_query($link, $sql);
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cart Page</title>
    <style>
        .sticky-header th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }
    </style>
</head>
<body style="background-color: #ececec;">

    <?php include "../components/header.php" ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-9 bg-white rounded p-4 border border-gray">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                            echo '
                                <div class="table-responsive" style="max-height: 500px;">
                                    <table class="table">
                                        <thead class="sticky-header">
                                            <tr>
                                                <th scope="col">ID Đơn hàng</th>
                                                <th scope="col">Ngày tạo</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Tổng cộng</th>
                                                <th scope="col">Chi tiết</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            ';

                            while($order = mysqli_fetch_assoc($result)) {
                                echo '
                                    <tr>
                                        <td>' . $order['id'] . '</td>
                                        <td>' . date('d/m/Y', strtotime($order['order_date'])) . '</td>
                                        <td>' . $order['status'] . '</td>
                                        <td>' . number_format($order['total_money'], 0, ',', '.') . ' đ</td>
                                ';
                                $order_id = $order['id'];
                                $sql_details = "SELECT * FROM order_detail WHERE order_id = $order_id";
                                $result_details = mysqli_query($link, $sql_details);

                                if (mysqli_num_rows($result_details) > 0) {
                                    echo '<td>';
                                    while($detail = mysqli_fetch_assoc($result_details)) {
                                        $productInfo = getProductInfo($link, $detail['product_id']);
                                        echo '
                                            <div class="d-flex">
                                                <div class="font-weight-bold h5">
                                                ' . $detail['quantity'] . ' x ' . $productInfo['name'] . '
                                                </div>
                                            </div>
                                        ';
                                    }
                                    echo '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '
                                                </tbody>
                                            </table>
                                        </div>
                            ';
                        }
                     else {
                        echo "<div>Your dont have any order</div>";
                    }
                ?>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded border border-gray p-4">
                    <h2 class="font-weight-bold h3 mb-4">Summary</h2>
                    <?php
                    $sql = "SELECT status, total_money FROM orders WHERE user_id = ?";
                    $stmt = mysqli_prepare($link, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $user_id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $totalSpend = 0;
                    $pending = $shipped = $processing = $shipping = 0;
                    while ($order = mysqli_fetch_assoc($result)) {
                        $totalSpend += $order['total_money'];

                        switch ($order['status']) {
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
                    echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Pending: $pending</p>";
                    echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Shipped: $shipped</p>";
                    echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Processing: $processing</p>";
                    echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Shipping: $shipping</p>";
                    echo "<p style='color: #039c22; font-size: 30px; font-weight: bold;'>Tổng tiêu: <br/>" . number_format($totalSpend, 0, ',', '.') . " đ</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>