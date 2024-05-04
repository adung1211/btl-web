<?php
    require_once '../script/function.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $notifications = getNotificationsByUserId($_SESSION['userid']);
    $unreadCount = 0;
    foreach ($notifications as $notification) {
        if ($notification['read_status'] == 0) {
            $unreadCount++;
        }
    }
    echo json_encode(['unreadCount' => $unreadCount]);
?>