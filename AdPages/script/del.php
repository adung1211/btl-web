<?php
    include "../components/db.php";
    session_start();
?>
<?php
$id = $_GET['id'];
$query = "  UPDATE products
            SET deleted	 = 1
            WHERE id = '$id';";
$result = mysqli_query($link, $query);
?>