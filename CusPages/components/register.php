<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="../script/bootstrap.bundle.min.js"></script>
    <script src="../script/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container">
        <a href="#" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Đăng ký
        </a>

        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-black">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
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
                                if (isset($_POST['submitregister'])) {
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];
                                    if (register($username, $password))
                                        echo "<script>alert('Register successful');</script>";
                                    else
                                        echo "<script>alert('Register failed');</script>";
                                }
                            ?>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submitregister">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>

