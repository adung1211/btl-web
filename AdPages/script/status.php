<?php
    include "../components/db.php";
    session_start();
?>
<?php
$id = $_GET['id'];
$status = $_GET['status'];
$query = "  UPDATE orders
            SET status = '$status'
            WHERE id = '$id';";
$result = mysqli_query($link, $query);


$uid = $_GET['uid'];
$title = $_GET['title'];
$msg = $_GET['msg'];
$query = " INSERT INTO notifications (user_id, title, msg) 
           VALUES ('$uid', '$title', '$msg')";
$result = mysqli_query($link, $query);
?>