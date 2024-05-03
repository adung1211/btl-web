<?php
    include "../components/db.php";
    session_start();
?>
<?php
$Name = $_GET['Name'];
$Cate = $_GET['Cate'];
$Img = $_GET['Img'];
$Price = $_GET['Price'];
$Manuf = $_GET['Manuf'];
$Warrant = $_GET['Warrant'];
$Desc = $_GET['Desc'];

$query = "INSERT INTO products (name, category, img, price, manufacturer, warrant, description) VALUES ('$Name', '$Cate', '$Img', '$Price', '$Manuf', '$Warrant', '$Desc')";
$result = mysqli_query($link, $query);
?>