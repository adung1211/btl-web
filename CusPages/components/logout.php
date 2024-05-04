<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (isset($_GET['logout'])) {
        unset($_SESSION['username']);
        session_destroy();
        header('Location: ../pages/home.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Logout</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="../script/bootstrap.min.js"></script>
    <script src="../script/jquery-3.7.1.min.js"></script>
</head>


<body>
    <div class="container">
        <a href="?logout" class="text-white text-decoration-none">
            Đăng xuất
        </a>
    </div>
</body>

