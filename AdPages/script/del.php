<?php
    include "../components/db.php";
    session_start();
?>
<?php
$id = $_GET['id'];
$query = "DELETE FROM products WHERE ID = '$id'";
$result = mysqli_query($link, $query);
?>