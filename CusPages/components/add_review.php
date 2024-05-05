<?php
include '../script/function.php';

$userId = $_POST['user_id'];
$username = $_POST['user_name'];
$productId = $_POST['product_id'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];
echo $userId;
echo $username;
echo $productId;
echo $rating;
echo $comment;


if (empty($userId) || empty($username) || empty($productId) || empty($rating) || empty($comment)) {
    die('Please fill all required fields!');
}

addReview($userId, $username, $productId, $rating, $comment);

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>