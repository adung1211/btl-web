
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="../script/bootstrap.min.js"></script>
    <script src="../script/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container">
        <a href="#" class="text-white text-decoration-none w-10 h-10" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Đăng nhập
        </a>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-black">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <form action="" method="post">
                        <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <?php
                                if (isset($_POST['submitlogin'])) {

                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    if (login($username, $password)) {
                                        header('Location: ../pages/home.php');
                                        
                                    } else {
                                        echo "<script>alert('Login failed');</script>";
                                    }
                                }
                            ?>
                        </div>
                        
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submitlogin">Login</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>

