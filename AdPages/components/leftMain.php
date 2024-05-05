<div class="left-main">
    <i class="bi bi-person-circle" style="font-size: 70px;"></i>
    <h2>Hello, Admin</h2>
    <form method="post">
    <div class="feat-list">
        <a type="button" href="./main.php">
            <i class="bi bi-house-fill h4"><span class="icon-text"> Home </span></i>
        </a>
        <a type="button" href="./products.php">
            <i class="bi bi-grid-3x3-gap-fill h4"><span class="icon-text"> Procducts </span></i>
        </a>
        <a type="button" href="./orders.php">
            <i class="bi bi-cart-fill h4"><span class="icon-text"> Orders </span></i>
        </a>

        <button type="submit" name="submitLogout">
            <i class="bi bi-box-arrow-right h4"><span class="icon-text"> Log out </span></i>
        </button>
    </div>
    </form>
</div>

<?php
    if (isset($_POST['submitLogout'])){
        session_destroy();
        header('Location: ../pages/login.php');
    }
?>