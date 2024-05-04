<?php
    include '../components/db.php';
    include '../script/function.php';
    session_start();
?>
<head>
    <title>Product Detail</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/footer.css">
</head>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $user_id = $_POST['user_id'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $order_date = date('Y-m-d H:i:s');
        $status = 'Pending';
        $total_money = $_POST['total'];


        $result = insert_order($link, $user_id, $fullname, $email, $phone_number, $address, $note, $order_date, $status, $total_money, $_SESSION['cart']);

        if($result) {
            $_SESSION['cart'] = [];
            $_SESSION['cartcount'] = 0;
            echo '
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mt-5">
                            <div class="card-body">
                                <h4 class="card-title">Thanh toán thành công!</h4>
                                <p class="card-text">Cảm ơn bạn đã mua hàng. Bạn sẽ được chuyển hướng đến trang chủ trong vài giây. Nếu không hãy nhấp <a href="../pages/home.php">vào đây</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            header("refresh:3;url=../pages/home.php");
        } else{
            echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
        }

        mysqli_close($link);
}
?>