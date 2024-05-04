<?php
    session_start();

    if (!empty($_SESSION['cart'])) {
        $total = 0;
        foreach ($_SESSION['cart'] as $product) {
            $total += $product['price'] * $product['quantity'];
        }
    }
    else {
        $total = 0;
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
                <?php if (empty($_SESSION['cart'])): ?>
                    <div>Your cart is empty</div>
                <?php else: ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-muted">Product</th>
                                <th class="text-left text-uppercase text-muted">Quantity</th>
                                <th class="text-left text-uppercase text-muted">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $product): ?>
                                <tr>
                                    <td>
                                        <div>
                                            <div style="width: 200px; height: auto;">
                                                <img class="img-fluid" src="<?php echo $product['image']; ?>" alt=""/>
                                            </div>
                                            <div class="font-weight-bold h5">
                                                <?php echo substr($product['name'], 0, 20); ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <form method="post" action="../components/removecart.php">
                                                <button class=' py-1 px-3 rounded border-0 fw-bold bg-gray'>-</button>
                                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                            </form>
                                            <div class='px-4 font-weight-bold h5'>
                                                <?php echo $product['quantity']; 
                                                ?>
                                            </div>
                                            <form method="post" action="../components/addtocart.php">
                                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                                <button type="submit" class='bg-gray py-1 px-3 rounded border-0 fw-bold'>+</button>
                                            </form>
                                        </div>
                                    </td style="width: 200px">
                                    <td class="p-3 font-weight-bold h5 align-middle">
                                        <?php echo number_format($product['price']); ?>
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
                                <td class='border-top border-gray align-middle p-3 font-weight-bold h5'><?php echo number_format($total); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <form method="post" action="../components/clearcart.php">
                        <button type="submit" class='bg-gray py-1 px-3 rounded border-0 fw-bold'>Clear Cart</button>
                    </form>
                <?php endif; ?>
                
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded border border-gray p-4">
                <h2 class="font-weight-bold h4 mb-4">Order Info</h2>
                <form method="post" action="../components/checkout.php">
                    <input type='hidden' name='user_id' value='<?php echo $_SESSION['userid']; ?>' />
                    <input type='hidden' name='total' value='<?php echo $total; ?>' />
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
    </div>
    
</body>
</html>