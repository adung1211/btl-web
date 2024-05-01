<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css">
</head>

<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
  ?>
    <!-- NAVBAR -->
    <nav class="header navbar navbar-expand-sm navbar-dark bg-danger">
        <div class="container-fluid">
        <a class="navbar-brand" href="product_list.php">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item p-8">
                <a class="nav-link" href="laptop.php">Laptop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Màn hình</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mouse.php">Chuột</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="keyboard.php">Bàn phím</a>
              </li>
            </ul>
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form> -->
          </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container">
    <h1 class="my-5">Danh sách sản phẩm</h1>
        <!-- Filter A->Z -->
        <div class="btn-group mb-4" role="group" aria-label="Alphabetical Filter">
            <button type="button" class="btn btn-secondary filter-btn" onclick="sortAZ()">Lọc từ A->Z</button>
        </div>

    <div class="row">
    <?php
      $sql = "SELECT * FROM products";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // Lặp qua từng hàng dữ liệu
        while($row = mysqli_fetch_assoc($result)) {
            $cate = $row["category"];
            if ($cate == "Screen") {
                $name = $row["name"];
                $price = $row["price"];
                $imgLink = $row["img"];
                // echo "ID: " . $row["id"]. " - Tên sản phẩm: " . $row["name"]. " - Giá: " . $row["price"]. "<br>";
                echo "<div class=\"col-md-3 mb-4\">";
                echo "<div class=\"card product-card\">";
                echo "<img src=".$imgLink." class=\"card-img-top\" alt=\"Product Image\">";
                echo  "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">$name</h5>";
                echo "<p class=\"card-text category\">$cate</p>";
                echo "<p class=\"card-text price\">".number_format($price)." VND</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
      } 
      else {
        echo "Không có sản phẩm nào trong cơ sở dữ liệu.";
      }
    ?>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./app.js"></script>
</body>
</html>
