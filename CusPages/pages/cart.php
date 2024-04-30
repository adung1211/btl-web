<?php
    include "../components/db.php";
    session_start();
    // Initialize cartProducts and products arrays
    $cartProducts = array(1, 2, 2, 3, 3, 3);
    $products = array(
        array('id' => 1, 'title' => 'Product 1', 'price' => 10.99, 'image' => 'https://product.hstatic.net/200000722513/product/27g4_f_8c7f92b9ab874c36b153beecc1739f9c_1024x1024.png'),
    );

    // Initialize form fields
    $name = 'John Doe';
    $email = 'john.doe@example.com';
    $city = 'New York';
    $postalCode = '10001';
    $streetAddress = '123 Main St';
    $country = 'USA';

    // Calculate total
    $total = 0;
    foreach ($cartProducts as $productId) {
        $price = 0;
        foreach ($products as $product) {
            if ($product['id'] === $productId) {
                $price = $product['price'];
                break;
            }
        }
        $total += $price;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart Page</title>
</head>
<body style="background-color: #ececec;">

    <?php include "../components/header.php" ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 bg-white rounded p-4 border border-gray">
                <?php if (empty($cartProducts)): ?>
                    <div>Your cart is empty</div>
                <?php else: ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-muted font-weight-bold">Product</th>
                                <th class="text-left text-uppercase text-muted font-weight-bold">Quantity</th>
                                <th class="text-left text-uppercase text-muted font-weight-bold">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex" style="width: 200px; height: auto;">
                                            <img class="img-fluid" src="<?php echo $product['image']; ?>" alt=""/>
                                        </div>
                                        <div class="font-weight-bold h5">
                                            <?php echo substr($product['title'], 0, 20); ?>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <button class='bg-light py-1 px-3 rounded font-weight-bold border-1'>-</button>
                                            <div class='px-4 font-weight-bold h5'>
                                                <?php echo count(array_filter($cartProducts, function($id) use ($product) { return $id === $product['id']; })); ?>
                                            </div>
                                            <button class='bg-light py-1 px-3 rounded font-weight-bold border-1'>+</button>
                                        </div>
                                    </td>
                                    <td class="p-3 font-weight-bold h5">
                                        <?php echo number_format(count(array_filter($cartProducts, function($id) use ($product) { return $id === $product['id']; })) * $product['price'], 2); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td class="border-top border-gray align-middle">
                                <div class="font-weight-bold h5">
                                    Total
                                </div>
                                </td>
                                <td class="border-top border-gray align-middle"></td>
                                <td class='border-top border-gray align-middle p-3 font-weight-bold h5'><?php echo number_format($total, 2); ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
            <div class="col-md-4 bg-white rounded p-4 border border-gray">
                <h2 class="font-weight-bold h4 mb-4">Order Info</h2>
                <form method="post" action="../components/checkout.php">
                    <input type='hidden' name='user_id' value='<?php echo $_SESSION['userid']; ?>' />
                    <input class="form-control mb-2" type='text' placeholder='Full Name' name='fullname' required/>
                    <input class="form-control mb-2" type='email' placeholder='Email' name='email' />
                    <input class="form-control mb-2" type='text' placeholder='Phone Number' name='phone_number' required/>
                    <input class="form-control mb-2" type='text' placeholder='Address' name='address' required/>
                    <textarea class="form-control mb-2" placeholder='Note' name='note'></textarea>
                    <button class="btn btn-dark text-white font-weight-bold py-2 px-2 rounded mt-4 w-100">Make Order</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>