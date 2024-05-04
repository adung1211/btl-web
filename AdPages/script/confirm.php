<?php
    include "../components/db.php";
    session_start();
?>
<?php
$id = $_GET['id'];
$query = "  UPDATE orders
            SET status = 'Confirmed'
            WHERE id = '$id';";
$result = mysqli_query($link, $query);

$uid = $_GET['uid'];

$query = " INSERT INTO notifications (user_id, title, msg) 
           VALUES ('$uid', 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi')";
$result = mysqli_query($link, $query);
?>