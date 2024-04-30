<?php
    include "../components/db.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/footer.css">
  </head>

  <body style="background-color: #ececec;">
    <?php include "../components/header.php" ?>

    <main class="container mt-4">
        <div class="row">
            <div class="col-md-1">
                <img src="../images/ad3.png" class="ad-banner" style="float: right; margin-right: 50px">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-5 bg-white py-5">
                        <img src="../images/test.img" class="img-fluid" alt="Product Image" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-md-7 bg-white py-5" style="border-left: 1px solid #ececec;">
                        <h2>Bàn phím cơ AKKO 5075B Plus White Akko Switch v3 Cream Yellow Pro</h2>
                        <p style="color: orange;">
                            5 &#9733;
                        </p>
                        <div class="d-flex justify-content-between mb-2 text-danger fs-2 fw-bold">
                            1.790.000₫
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">MUA NGAY</button>
                        </div>

                        <div class="promotional-gifts">
                            <h4>Quà tặng khuyến mãi</h4>
                            <p>1 Tặng ngay 1 x Chuột Rapoo M300 Silent Wireless Dark Grey trị giá 319.000₫</p>
                        </div>

                        <h4>Thông tin chung</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Hãng sản xuất:</strong> Akko</li>
                            <li class="list-group-item"><strong>Tình trạng:</strong> Mới</li>
                            <li class="list-group-item"><strong>Bảo hành:</strong> 12 tháng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <img src="../images/ad.png" class="ad-banner">
            </div>
        </div>
    </main>

    <div class="fixed-bottom bg-white">
    <?php include "../components/footer.html" ?>
    </div>
  </body>
</html>