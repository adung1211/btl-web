<?php
    include "../components/db.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                        <h4>Laptop gaming bán chạy</h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-2" id="lapG-list">
                            <?php
                                for ($x = 0; $x <= 10; $x++) {
                                    echo '
                                        <div class="col">
                                            <div class="card">
                                                <img src="../images/test.img" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#lapG-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#lapG-list', event)">
                        <i class="bi bi-chevron-right h4"></i>
                    </button>

                </div>


                <div class="ele-box">
                    <div class="head-box">
                        <h4>Laptop văn phòng bán chạy</h4>
                    </div>

                    <div class="card-box">
                       <div class="row row-cols-5 overflow-scroll flex-nowrap g-2" id="lapO-list">
                            <?php
                                for ($x = 0; $x <= 10; $x++) {
                                    echo '
                                        <div class="col">
                                            <div class="card">
                                                <img src="../images/test.img" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>

                    <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#lapO-list', event)">
                        <i class="bi bi-chevron-left h4"></i>
                    </button>

                    <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#lapO-list', event)">
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