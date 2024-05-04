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
            <div class="right-main">
            <div style="margin-right: 50px;">
                <h1>Orders List </h1>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>        
                        <th scope="col">S.N</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Total money</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM orders";
                        $result = mysqli_query($link, $query);
                        $no = 0;

                        while (mysqli_num_rows($result) > 0 && $row = mysqli_fetch_assoc($result)){
                            if ($row['deleted'] == 1) continue;
                            $no++;
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['phone_number'].'</td>
                                    <td>'.$row['order_date'].'</td>
                                    <td>'.$row['total_money'].'đ</td>
                            ';

                            if ($row['status'] == 'Confirmed'){
                                echo' <td style="color: green">'.$row['status'].'</td> ';
                            }
                            else{
                                echo' <td style="color: blue">'.$row['status'].'</td> ';
                            }
                                            
                            echo '
                                    <td>
                                        <a type="button" class="btn btn-info"  href="detail.php?id='.$row['id'].'">Info</button>
                                    </td>
                                </tr>
                            ';
                            
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>