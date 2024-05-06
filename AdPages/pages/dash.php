<?php
    include "../components/db.php";
    session_start();

    if (empty($_SESSION['AdUserId'])){
        header('Location: ../pages/login.php');
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

        <link rel="stylesheet" href="../style/admin.css">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    
    <body>

        <!-- Left content -->
        <div class="main-container">
            <?php include "../components/leftMain.php" ?>

            <!-- Right content -->
            <div class="right-main">
                <h1>Dashboard</h1>
                <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="box" style="background-color: #1E62F1;">
                            <i class="bi bi-people-fill"></i>
                            <p> Users <br/> <span style="font-weight: bold;">1000</span></p>
                            <div class="dummy-right"></div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="box" style="background-color: #FE646C;">
                            <i class="bi bi-check-circle-fill"></i>
                            <p> Orders <br/> <span style="font-weight: bold;">1000</span></p>
                            <div class="dummy-right"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box" style="background-color: #58CF5D;">
                            <i class="bi bi-bag-fill"></i>
                            <p> Products <br/> <span style="font-weight: bold;">1000</span></p>
                            <div class="dummy-right"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box" style="background-color: #FBAD4A;">
                            <i class="bi bi-currency-exchange"></i>
                            <p> Sales <br/> <span style="font-weight: bold;">1000đ</span></p>
                            <div class="dummy-right"></div>
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top: 50px;">
                    <div class="col-3">
                        <div class="most-sale">
                            <h5>Best-selling Product</h5>

                            <div class="bar"></div>
                                <div class="card-box">
                                <div class="row row-cols-1 overflow-scroll flex-nowrap g-2" id="sale-list">
                                <?php
                                    for ($x = 0; $x <= 10; $x++) {
                                        echo '
                                        <div class="col">
                                        <div class="card">
                                            <img src="https://product.hstatic.net/200000722513/product/ava_55d9a01f66cc4fd1aa26a8a91f51974e_medium.png" class="card-img-top">
                                            <div class="card-body">
                                                <h6>Laptop gaming Acer Nitro V ANV15 51 58AN</h6>
                                                <p style="font-style: oblique;">900,000đ</p>
                                                <div class="bar"></div>
                                                Has sold 499 in all time
                                            </div>
                                        </div>
                                        </div>
                                        ';
                                    }
                                ?>
                                </div>
                                </div>
                            <button type="button" class="btn m-0 p-0 butLeft" onclick="srcLeft('#sale-list', event)">
                                <i class="bi bi-chevron-left h4"></i>
                            </button>

                            <button type="button" class="btn m-0 p-0 butRight" onclick="srcRight('#sale-list', event)">
                                <i class="bi bi-chevron-right h4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="chart">
                            <div id="chartContainer" style="width: 100%; height: 400px;">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>



        <!-- Chart Script -->
        <script>
            const ctx = document.getElementById('myChart');
            const chartContainer = document.getElementById('chartContainer');

            // Set the canvas size to match the container size
            ctx.width = chartContainer.clientWidth;
            ctx.height = chartContainer.clientHeight;

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['VGA', 'Keyboard', 'Mouse', 'Screen'],
                    datasets: [{
                        label: '# Unit',
                        data: [12, 19, 3, 5],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Quantity of Products by Type'
                        }
                    }
                }
            });
        </script>


        <script src="../script/dash.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>