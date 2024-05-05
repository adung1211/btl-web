<?php
    require_once "../script/function.php";
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    $product_id = $_GET['id'];
    //$product_id = 3;
    $product = getProductInfo($product_id);
    $productRatings = getProductRatings($product_id);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Product Detail</title>
    <meta charset="utf-8" />
    <link href="../style/bootstrap.min.css" rel="stylesheet">
        <script src="../script/bootstrap.bundle.min.js"></script>
        <script src="../script/jquery-3.7.1.min.js"></script>
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
                        <img src="<?php echo $product['img']; ?>" class="img-fluid" alt="Product Image" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-md-7 bg-white py-5" style="border-left: 1px solid #ececec;">
                        <h2><?php echo $product['name']; ?></h2>
                        <span class="text-warning fs-4"> <?php echo $productRatings['averageRating']; ?> <i class="bi bi-star-fill"></i> </span>
                        <div class="d-flex justify-content-between mb-2 text-danger fs-2 fw-bold">
                        <?php echo number_format($product['price']); ?> đ
                        </div>
                        <div class="mb-3">
                            <form action="../components/addtocart.php" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $product['img']; ?>">
                                <input type="hidden" name="product_quantity" value="1">
                                <button class="btn btn-primary">Thêm vào giỏ</button>
                            </form>
                        </div>
                        <h4>Thông tin chung</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Hãng sản xuất:</strong> <?php echo $product['manufacturer']; ?></li>
                            <li class="list-group-item"><strong>Bảo hành:</strong> <?php echo $product['warrant']; ?></li>
                            <li class="list-group-item"><strong>Mô tả:</strong> <?php echo $product['description']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-2 bg-white p-3 mb-2">
                    <div class="col-md-12 p-3 mb-3 ">
                        <h4>Đánh giá & Nhận xét <?php echo $product['name']; ?></h4>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form action="../components/add_review.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid']; ?>">
                                    <input type="hidden" name="user_name" value="<?php echo $_SESSION['username']; ?>">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <textarea name="comment" id="comment" class="form-control" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select name="rating" id="rating" class="form-control">
                                                <option value="1">1★</option>
                                                <option value="2">2★</option>
                                                <option value="3">3★</option>
                                                <option value="4">4★</option>
                                                <option value="5">5★</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Submit Review</button>
                                </form>
                            </div>
                        </div>
                        <?php
                        $productId = $_GET['id'];
                        $reviews = getAllReviews($productId);
                        
                        foreach ($reviews as $review) {
                            $date = date_create($review['created_at']);
                            $formattedDate = date_format($date, 'd-m-Y');
                        
                            echo '<div class="card mb-3">';
                            echo '    <div class="card-body">';
                            echo '        <div class="d-flex justify-content-between">';
                            echo '        <h5 class="card-title">' . $review['username'] . ' <span class="text-muted fs-6">' . $formattedDate . '</span></h5>';
                            echo '        <span class="text-warning"> ' . $review['rating'] . ' <i class="bi bi-star-fill"></i> </span>';
                            echo '        </div>';
                            echo '        <p class="card-text">' . $review['comment'] . '</p>';
                            echo '    </div>';
                            echo '</div>';
                        }
                        ?>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span class="text-warning"> <i class="bi bi-star-fill"></i> </span>
                            <span class="h4"> <?php echo $productRatings['averageRating']; ?>/5 </span>
                            </div>
                            <span> (<?php echo $productRatings['numRatings']; ?>) đánh giá & nhận xét </span>
                        </div>
                        <h5 class="mt-2">Đánh giá</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-1">
                                    5 <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="progress flex-grow-1" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <?php 
                                        if ($productRatings['numRatings'] > 0) {
                                            $percentage = ($productRatings['ratings'][5] / $productRatings['numRatings']) * 100;
                                        } else {
                                            $percentage = 0;
                                        }
                                    ?>
                                    <div class="progress-bar text-bg-warning" style="width: <?php echo $percentage; ?>%">
                                    <?php echo $productRatings['ratings'][5]; ?></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    4 <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="progress flex-grow-1" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <?php 
                                        if ($productRatings['numRatings'] > 0) {
                                            $percentage = ($productRatings['ratings'][4] / $productRatings['numRatings']) * 100;
                                        } else {
                                            $percentage = 0;
                                        }
                                    ?>
                                    <div class="progress-bar text-bg-warning" style="width: <?php echo $percentage; ?>%">
                                    <?php echo $productRatings['ratings'][4]; ?></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    3 <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="progress flex-grow-1" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <?php 
                                        if ($productRatings['numRatings'] > 0) {
                                            $percentage = ($productRatings['ratings'][3] / $productRatings['numRatings']) * 100;
                                        } else {
                                            $percentage = 0;
                                        }
                                    ?>
                                    <div class="progress-bar text-bg-warning" style="width: <?php echo $percentage; ?>%">
                                    <?php echo $productRatings['ratings'][3]; ?></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    2 <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="progress flex-grow-1" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <?php 
                                        if ($productRatings['numRatings'] > 0) {
                                            $percentage = ($productRatings['ratings'][2] / $productRatings['numRatings']) * 100;
                                        } else {
                                            $percentage = 0;
                                        }
                                    ?>
                                    <div class="progress-bar text-bg-warning" style="width: <?php echo $percentage; ?>%">
                                    <?php echo $productRatings['ratings'][2]; ?></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    1 <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="progress flex-grow-1" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <?php 
                                        if ($productRatings['numRatings'] > 0) {
                                            $percentage = ($productRatings['ratings'][1] / $productRatings['numRatings']) * 100;
                                        } else {
                                            $percentage = 0;
                                        }
                                    ?>
                                    <div class="progress-bar text-bg-warning" style="width: <?php echo $percentage; ?>%">
                                    <?php echo $productRatings['ratings'][1]; ?></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-1">
                <img src="../images/ad.png" class="ad-banner">
            </div>
        </div>
    </main>

    <div class="bg-white">
    <?php include "../components/footer.html" ?>
    </div>
  </body>
</html>