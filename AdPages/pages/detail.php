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
            <?php include "../components/leftMain.html" ?>

            <!-- Right content -->
            <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM orders WHERE id = '$id'";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_assoc($result)
            ?>
            <div class="right-main">
            <div style="margin-right: 50px;">
                <div style="display: flex; margin-bottom:10px">
                    <h1 style="margin-right: 10px">Order #<?php echo $row['id'];?></h1>
                    <?php
                    if ($row['status'] == 'Confirmed'){
                        echo'<div class="btn btn-success tx0">Confirmed</div>';
                    }
                    else{
                        echo'<div class="btn btn-primary tx0">Pending</div>';
                    }
                    ?>
                </div>
                <div class="ele-box" style="font-size: large;">
                    <h4 style="margin-right: 10px">Order Detail</h4>

                    <p> <span class="tx1">Name customer : </span> <?php echo $row['full_name'] ?> </p>

                    <p> <span class="tx1">Email : </span> <?php echo $row['email'] ?> </p>

                    <p> <span class="tx1">Phone number : </span> <?php echo $row['phone_number'] ?> </p>

                    <p> <span class="tx1">Address : </span> <?php echo $row['address'] ?> </p>

                    <p> <span class="tx1">Order date : </span> <?php echo $row['order_date'] ?> </p>

                    <p> <span class="tx1">Note : </span> <?php echo $row['note'] ?> </p>

                    <!-- <div style="text-align: center; font-size: 25px;">
                        <p>
                            Order total: <span><?php echo $row['total_money'] ?></span>
                        </p>
                    </div> -->
                </div>

                <div class="ele-box">
                    <h4 style="margin-right: 10px">Order Items</h4>
                    <div style="margin-right: 10px">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>        
                            <th scope="col">S.N</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query1 = "SELECT * FROM order_detail WHERE order_id = '{$row['id']}'";
                            $result1 = mysqli_query($link, $query1);
                            $no = 0;

                            while (mysqli_num_rows($result) > 0 && $row1 = mysqli_fetch_assoc($result1)){
                                $no++;
                                $query2 = "SELECT * FROM products WHERE id = '{$row1['product_id']}'";
                                $result2 = mysqli_query($link, $query2);
                                $row2 = mysqli_fetch_assoc($result2);
                                echo '
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$row2['name'].'</td>
                                        <td><img src="'.$row2['img'].'" style="height: 50px"></td>
                                        <td>'.$row1['price'].'đ</td>
                                        <td>'.$row1['quantity'].'</td>
                                        <td>'.$row1['total_price'].'đ</td>
                                    </tr>
                                ';
                                
                            }
                            ?>
                        </tbody>
                    </table>

                    <div style="text-align: right; margin-right: 30px; font-size: 20px; font-style: italic;">
                       Total: <span style="font-weight: bold;"> <?php echo $row['total_money'] ?>đ</span>
                    </div>
                    <div>
                </div>
            </div>
            </div>
            
            <?php
                if ($row['status'] == 'Confirmed'){
                    echo'
                    <button type="button" class="btn btn-dark" style="margin-bottom: 20px;" disabled>Confirm order</button>                    ';
                }
                else{
                    echo '
                    <button type="button" class="btn btn-dark" style="margin-bottom: 20px;" onClick="handledConfirm('.$row['id'].', '.$row['user_id'].')">Confirm Order</button>
                    ';
                }
            ?>
        </div>
        
         <!-- script include -->
         <script src="../script/detail.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>