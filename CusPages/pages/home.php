<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    require_once "../script/function.php";
    include "../components/product_card.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../style/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="../style/home.css">
        <link rel="stylesheet" href="../style/footer.css">
    </head> 

    <body>
        <?php include "../components/header.php" ?>

        <!--Main-->
        <div class="main-container">
            <div class="left-main">
                <img src="../images/ad3.png" class="ad-banner" style="float: right; margin-right: 50px">
            </div>
            <div class="center-main">
                <div style="display: flex; justify-content: space-between">
                    <img src="../images/ads1.img" style="width: 49.5%;">
                    <img src="../images/ads2.img" style="width: 49.5%;">
                </div>

                <div class="ele-box">
                    <div class="head-box">
                        <h4>Các sản phẩm bán chạy</h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-4" style="height: 500px;" id="product-list">
                            <?php
                                $result = getAllProducts();

                                if (mysqli_num_rows($result) > 0) {
                                    while($product = mysqli_fetch_assoc($result)) {
                                        echo createHomeProductCard($product);
                                    }
                                } else {
                                    echo "No products found";
                                }
                            ?>
                            
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#product-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#product-list', event)">
                        <i class="bi bi-chevron-right h4"></i>
                    </button>

                </div>
                <div class="ele-box">
                    <div class="head-box">
                        <h4>VGA bán chạy</h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-4" style="height: 500px;" id="VGA-list">
                            <?php
                                $result = getProductsByCategory('VGA');

                                if (mysqli_num_rows($result) > 0) {
                                    while($product = mysqli_fetch_assoc($result)) {
                                        echo createHomeProductCard($product);
                                    }
                                } else {
                                    echo "No products found";
                                }
                            ?>
                            
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#VGA-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#VGA-list', event)">
                        <i class="bi bi-chevron-right h4"></i>
                    </button>

                </div>
                <div class="ele-box">
                    <div class="head-box">
                        <h4> Màn hình bán chạy  </h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-4" style="height: 500px;" id="screen-list">
                            <?php
                                $result = getProductsByCategory('Screen');

                                if (mysqli_num_rows($result) > 0) {
                                    while($product = mysqli_fetch_assoc($result)) {
                                        echo createHomeProductCard($product);
                                    }
                                } else {
                                    echo "No products found";
                                }
                            ?>
                            
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#screen-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#screen-list', event)">
                        <i class="bi bi-chevron-right h4"></i>
                    </button>

                </div>
                <div class="ele-box">
                    <div class="head-box">
                        <h4>Chuột bán chạy</h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-4" style="height: 500px;" id="mouse-list">
                            <?php
                                $result = getProductsByCategory('Mouse');

                                if (mysqli_num_rows($result) > 0) {
                                    while($product = mysqli_fetch_assoc($result)) {
                                        echo createHomeProductCard($product);
                                    }
                                } else {
                                    echo "No products found";
                                }
                            ?>
                            
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#mouse-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#mouse-list', event)">
                        <i class="bi bi-chevron-right h4"></i>
                    </button>

                </div>

                <div class="ele-box">
                    <div class="head-box">
                        <h4>Bàn phím bán chạy</h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-4" style="height: 500px;" id="keyboard-list">
                            <?php
                                $result = getProductsByCategory('Keyboard');

                                if (mysqli_num_rows($result) > 0) {
                                    while($product = mysqli_fetch_assoc($result)) {
                                        echo createHomeProductCard($product);
                                    }
                                } else {
                                    echo "No products found";
                                }
                            ?>
                            
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#keyboard-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#keyboard-list', event)">
                        <i class="bi bi-chevron-right h4"></i>
                    </button>

                </div>
                
            </div>
            <div class="right-main">
                <img src="../images/ad.png" class="ad-banner">
            </div>
        </div>
        
        <?php include "../components/footer.html" ?>
        <script src="../script/home.js"></script>
    </body>
</html>