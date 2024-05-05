<?php
    include "../components/db.php";
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if (!empty($_SESSION['AdUserId'])){
        header('Location: ../pages/products.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="../style/login.css">
    </head>
    
    <body>
        
        <div class="main-container">
        <div class="center">
            <h3>Admin login</h3>
            <div class="bar"></div>

            <form method="post">
            <div  style="display: flex;">
                <i class="bi bi-person-fill h4" style="margin-top: 5px;"></i>
                <input type="text" class="form-control border-0 bg-transparent shadow-none " placeholder="Username" name="username">
            </div>
            <div class="bar0"></div>

            <div  style="display: flex;">
                <i class="bi bi-key-fill h4" style="margin-top: 5px;"></i>
                <input type="password" id="inputPass" class="form-control border-0 bg-transparent shadow-none" placeholder="Password" name="password">
            </div>
            <div class="bar0"></div>

            <button type="submit" name="submitLogin">Login</button>
            </form>
        </div>
        </div>

        <?php
            function login($username, $password) {
                global $link;
            
                $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password' AND role = '1'";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_array($result);
            
                if ($row) {
                    $_SESSION['AdUserId'] = $row['id'];
                    return true;
                } else {
                    return false;
                }
            }

            if (isset($_POST['submitLogin'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                if (login($username, $password)) {
                    header('Location: ../pages/products.php');
                    
                } else {
                    echo "<script>alert('Login failed');</script>";
                }
            }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>