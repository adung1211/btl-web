<?php
    include "../components/db.php";
    session_start();
?>
<?php
$id = $_GET['id'];
$Name = $_GET['Name'];
$Cate = $_GET['Cate'];
$Img = $_GET['Img'];
$Price = $_GET['Price'];
$Manuf = $_GET['Manuf'];
$Warrant = $_GET['Warrant'];
$Desc = $_GET['Desc'];

$query = "UPDATE products
        SET name = '$Name',
            category = '$Cate',
            img = '$Img',
            price = '$Price',
            manufacturer = '$Manuf',
            warrant = '$Warrant',
            description = '$Desc'
        WHERE id = '$id';";
$result = mysqli_query($link, $query);
?>