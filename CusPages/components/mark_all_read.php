<?php
require_once '../script/function.php';

if (isset($_SESSION['userid'])) {
    $userId = $_SESSION['userid'];

    markAllNotificationsAsRead($userId);

    // Redirect back to the notifications page
    header('Location: ../pages/notifications.php');
    exit();
}