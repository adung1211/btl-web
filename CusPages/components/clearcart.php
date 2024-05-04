<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
$_SESSION['cart'] = array();
$_SESSION['cartcount'] = 0;
header('Location: ../pages/cart.php');
?>