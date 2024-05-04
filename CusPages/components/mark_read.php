<?php
    session_start();
    require_once '../script/function.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = markNotificationAsRead($id);

        if ($result > 0) {
            $_SESSION['message'] = 'Notification marked as read.';
        } else {
            $_SESSION['error'] = 'Failed to mark notification as read.';
        }
    }
    header('Location: ../pages/notifications.php');
    exit();
?>