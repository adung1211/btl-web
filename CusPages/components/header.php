<!--Navbar-->
<?php
    require_once "../script/function.php";
?>
<head>
    <title>Product Detail</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="../script/bootstrap.bundle.min.js"></script>
    <script src="../script/jquery-3.7.1.min.js"></script>
</head>
<nav class="navbar", style="background-color: #0A804A; color: white;">
    <div class="container-fluid" style="justify-content: center;">
        <div style="display: flex; align-items: center">
            <a class="navbar-brand" href="../pages/home.php">
            <img src="../images/logo.img" alt="Logo" width="250" height="40" class="d-inline-block align-text-top">
            </a>

            <div style="display: flex; gap: 20px; margin-top: 5px;">
                <a href="../Product/vga.php" class="nav-link">VGA</a>
                <a href="../Product/screen.php" class="nav-link">Màn hình</a>
                <a href="../Product/mouse.php" class="nav-link">Chuột máy tính</a>
                <a href="../Product/keyboard.php" class="nav-link">Bàn phím</a>
            </div>
        </div>
        <div style="display: flex; margin-left: 700px">
            <div class="d-flex ms-auto align-items-center flex-nowrap">
                <?php
                    if (isset($_SESSION['username'])) {
                        include "../components/notification.php";
                        echo '<a href="../pages/order_history.php" class="me-4 text-white">
                            <i class="fa-solid fa-clipboard fa-lg"></i>
                            </a>';
                        echo '<a href="../pages/cart.php" class="position-relative">
                        <i class="fa-solid fa-cart-shopping fa-lg me-4 text-white">';
                        if (isset($_SESSION['cartcount']) && $_SESSION['cartcount'] > 0) {
                        ?>
                            <div class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger border border-light ">
                            <span class="text-white"><?php echo $_SESSION['cartcount']; ?></span>
                            </div>
                        <?php
                        }
                        echo '</i></a>';
                        echo '<a href="../components/logout.php
                        " class="text-white text-decoration-none">  Đăng xuất
                        </a>';
                    } else {
                        echo '<div style="min-width: 110px;">';
                        include "../components/login.php";
                        echo '</div>';
                        include "../components/register.php";
                    }
                ?>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
    $('#notificationBell').popover({
        trigger: 'click',
        placement: 'bottom'
    });
});
</script>
</nav>