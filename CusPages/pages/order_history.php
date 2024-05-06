<?php
    require_once "../script/function.php";
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $user_id = $_SESSION['userid'];
    $result = getOrdersByUserId($user_id);
    
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
                                                <th scope="col">ID</th>
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
                                ';
                                if ($order['status'] == 'Shipped'){
                                    echo' <td style="color: green">'.$order['status'].'</td> ';
                                }
                                else if ($order['status'] == 'Pending'){
                                    echo' <td style="color: #0DCAF0">'.$order['status'].'</td> ';
                                }
                                else if ($order['status'] == 'Processing'){
                                    echo' <td style="color: #0C6EFD">'.$order['status'].'</td> ';
                                }
                                else{
                                    echo' <td style="color: red">'.$order['status'].'</td> ';
                                }
                                echo '
                                        <td>' . number_format($order['total_money'], 0, ',', '.') . ' đ</td>
                                ';
                                $orderId = $order['id'];
                                $result_details = getOrderDetailsByOrderId($orderId);

                                if (mysqli_num_rows($result_details) > 0) {
                                    echo '<td>';
                                    while($detail = mysqli_fetch_assoc($result_details)) {
                                        $productInfo = getProductInfo($detail['product_id']);
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
                        $userId = $_SESSION['userid'];
                        $orderSummary = getOrderSummaryByUserId($userId);
                        
                        echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Total Orders: " . $orderSummary['totalOrders'] . "</p>";
                        echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Cancelled: " . $orderSummary['cancelled'] . "</p>";
                        echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Pending: " . $orderSummary['pending'] . "</p>";
                        echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Shipped: " . $orderSummary['shipped'] . "</p>";
                        echo "<p style='color: #333; font-size: 20px; font-weight: bold;'>Processing: " . $orderSummary['processing'] . "</p>";
                        echo "<p style='color: #039c22; font-size: 30px; font-weight: bold;'>Tổng tiêu: <br/>" . number_format($orderSummary['totalSpend'], 0, ',', '.') . " đ</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>