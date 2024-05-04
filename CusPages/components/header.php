<!--Navbar-->
<?php
    require_once "../script/function.php";
?>
<head>
    <title>Product Detail</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<nav class="navbar", style="background-color: #0A804A; color: white;">
    <div class="container-fluid" style="justify-content: center;">
        <div style="display: flex; align-items: center">
            <a class="navbar-brand" href="../pages/home.php">
            <img src="../images/logo.img" alt="Logo" width="250" height="40" class="d-inline-block align-text-top">
            </a>

            <div style="display: flex; gap: 20px; margin-top: 5px;">
                <h6>
                    Laptop Gaming
                </h6>
                <h6>
                    PC Đồ Hoạ
                </h6>
                <h6>
                    Chuột máy tính
                </h6>
                <h6>
                    Bàn phím
                </h6>
            </div>
        </div>
        
        <div style="display: flex; margin-left: 700px">
            <div class="d-flex ms-auto align-items-center flex-nowrap">
                <?php
                    if (isset($_SESSION['username'])) {
                        echo '<a href="../pages/order_history.php" class="me-4 text-white">
                            <i class="fa-solid fa-clipboard fa-lg"></i>
                            </a>';
                        echo '<a href="../pages/cart.php" class="position-relative">
                        <i class="fa-solid fa-cart-shopping fa-lg me-4 text-white">';
                        if (isset($_SESSION['cartcount']) && $_SESSION['cartcount'] > 0) {
                            echo '<span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">';
                            echo $_SESSION['cartcount'];
                            echo '</span>';
                        }
                        echo '</i></a>';
                        include "../components/logout.php";
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
</nav>