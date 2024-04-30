<?php
    include "../components/db.php";
    session_start();
?>
<?php
$Name = $_GET['Name'];
$Cate = $_GET['Cate'];
$Img = $_GET['Img'];

$query = "INSERT INTO products (Name, Category, Img) VALUES ('$Name', '$Cate', '$Img')";
$result = mysqli_query($link, $query);
?>