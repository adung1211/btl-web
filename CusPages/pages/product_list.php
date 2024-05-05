<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="../style/home.css">
  <link rel="stylesheet" href="../style/footer.css">

</head>

<body>
  <?php
    require_once "../script/function.php";
    require_once "../components/product_card.php";
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
  ?>
   <?php include "../components/header.php" ?>

    <div class="container">
    <h3 class="my-3">Danh sách sản phẩm</h3>
    <div class="mb-4" role="group" aria-label="Sort Options">
      <?php
        $categoryParam = isset($_GET['category']) ? '&category=' . urlencode($_GET['category']) : '';
      ?>
      <a href="product_list.php?sortColumn=name&sortOrder=asc<?php echo $categoryParam; ?>" class="btn btn-secondary me-2">Sort by Name (A-Z)</a>
      <a href="product_list.php?sortColumn=name&sortOrder=desc<?php echo $categoryParam; ?>" class="btn btn-secondary me-2">Sort by Name (Z-A)</a>
      <a href="product_list.php?sortColumn=price&sortOrder=asc<?php echo $categoryParam; ?>" class="btn btn-secondary me-2">Sort by Price (Low to High)</a>
      <a href="product_list.php?sortColumn=price&sortOrder=desc<?php echo $categoryParam; ?>" class="btn btn-secondary">Sort by Price (High to Low)</a>
    </div>

    <div class="row row-cols-md-5 g-4">
    <?php
      $sortColumn = $_GET['sortColumn'] ?? null;
      $sortOrder = $_GET['sortOrder'] ?? null;
    
      if (isset($_GET['category'])) {
        $category = $_GET['category'];
        $result = getProductsByCategory($category, $sortColumn, $sortOrder);
      } else {
        $result = getAllProducts($sortColumn, $sortOrder);
      }
    
      if (mysqli_num_rows($result) > 0) {
        while($product = mysqli_fetch_assoc($result)) {
            echo createProductCard($product);
        }
      } 
      else {
        echo "Không có sản phẩm nào trong cơ sở dữ liệu.";
      }
    ?>
    </div>
    <div class="fixed-bottom">
      <?php include "../components/footer.html" ?>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./app.js"></script>
</body>
</html>
