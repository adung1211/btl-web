<?php
    // Initialize cartProducts and products arrays
    // $cartProducts = array();
    // $products = array();

    // // Initialize form fields
    // $name = '';
    // $email = '';
    // $city = '';
    // $postalCode = '';
    // $streetAddress = '';
    // $country = '';

    // // Calculate total
    // $total = 0;
    // foreach ($cartProducts as $productId) {
    //     $price = 0;
    //     foreach ($products as $product) {
    //         if ($product['id'] === $productId) {
    //             $price = $product['price'];
    //             break;
    //         }
    //     }
    //     $total += $price;
    // }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart Page</title>
</head>
<body style="background-color: #ececec;">

    <?php include "../components/header.php" ?>
    <main class="container mt-4">
        <div class="row">
            <div class="col-md-1">
                <img src="../images/ad3.png" class="ad-banner" style="float: right; margin-right: 50px">
            </div>
            <div class="col-md-10">
                    <h1>Cart</h1>
                    <?php if (empty($cartProducts)): ?>
                        <div>Your cart is empty</div>
                    <?php else: ?>
                        <table>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['title']; ?></td>
                                    <td>
                                        <!-- You would need to implement the functionality to add or remove products from the cart -->
                                        <button>-</button>
                                        <div><?php echo count(array_filter($cartProducts, function($id) use ($product) { return $id === $product['id']; })); ?></div>
                                        <button>+</button>
                                    </td>
                                    <td><?php echo $product['price']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><?php echo $total; ?></td>
                            </tr>
                        </table>
                    <?php endif; ?>

                    <?php if (!empty($cartProducts)): ?>
                        <h2>Order Info</h2>
                        <form method="post">
                            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
                            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                            <input type="text" name="city" placeholder="City" value="<?php echo $city; ?>">
                            <input type="text" name="postalCode" placeholder="Postal Code" value="<?php echo $postalCode; ?>">
                            <input type="text" name="streetAddress" placeholder="Street Address" value="<?php echo $streetAddress; ?>">
                            <input type="text" name="country" placeholder="Country" value="<?php echo $country; ?>">
                            <button type="submit">Continue To Payment</button>
                        </form>
                    <?php endif; ?>
            </div>
            <div class="col-md-1">
                <img src="../images/ad.png" class="ad-banner">
            </div>
        </div>
</body>
</html>