<?php
    $link = mysqli_connect("localhost", "root", "");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $db_selected = mysqli_select_db($link, 'ecommerce');
?>
