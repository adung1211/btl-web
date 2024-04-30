<!--Navbar-->
<nav class="navbar", style="background-color: #0A804A; color: white;">
    <div class="container-fluid" style="justify-content: center;">
        <div style="display: flex; align-items: center">
            <a class="navbar-brand" href="#">
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
                        echo '<i class="fa-solid fa-cart-shopping fa-lg me-4"></i>';
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