<?php
    include "../components/db.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="../style/admin.css">
    </head>
    
    <body>
        <!-- Left content -->
        <div class="main-container">
            <div class="left-main">
                <i class="bi bi-person-circle" style="font-size: 70px;"></i>
                <h2>Hello, Admin</h2>
                
                <div class="feat-list">
                    <button type="button" onclick="Show('0')">
                        <i class="bi bi-house-fill h4"><span class="icon-text"> Home </span></i>
                    </button>
                    <button type="button" onclick="Show('1')">
                    <i class="bi bi-grid-3x3-gap-fill h4"><span class="icon-text"> Procducts </span></i>
                    </button>
                </div>
            </div>

            <!-- Right content -->
            <div class="right-main">
                <div id="P0">
                <img src="https://i.imgur.com/xWZdHHX.jpeg" style="width: 500px; margin-top: 50px"></td>
                </div>

                <div id="P1" style="margin-right: 50px;">
                    <h1>Products List Items</h1>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $query = "SELECT * FROM products";
                                $result = mysqli_query($link, $query);
                                $no = 0;

                                while (mysqli_num_rows($result) > 0 && $row = mysqli_fetch_assoc($result)){
                                    if ($row['deleted'] == 1) continue;
                                    $no++;
                                    echo '
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['category'].'</td>
                                            <td><img src="'.$row['img'].'" style="height: 150px"></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" onClick="handleEdit('.$row['id'].', \''.$row['name'].'\',\''.$row['category'].'\' ,\''.$row['img'].'\', \''.$row['price'].'\', \''.$row['manufacturer'].'\', \''.$row['warrant'].'\')">Edit</button>
                                                <button type="button" class="btn btn-danger" onClick="handleDel('.$row['id'].')">Delete</button>
                                            </td>
                                        </tr>
                                    ';
                                    
                                }
                            ?>
                        </tbody>
                        <!-- <script>
                            height = "<?php echo $no;?>" * 220 + "px";
                            $(".left-main").css("height", height);
                        </script> -->
                    </table>
                    <?php include "../components/form.php" ?>
                    
                </div>
            </div>
        </div>
        
        <!-- script include -->
        <script src="../script/admin.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>