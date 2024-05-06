<?php
    function createProductCard($product) {
        return "
        <div class=\"col\">
            <div class=\"card\" style=\"height: 400px;\">
                <img src=\"{$product['img']}\" class=\"card-img-top\" alt=\"Product Image\">
                <div class=\"card-body\">
                    <a href=\"../pages/detail.php?id={$product['id']}\" style=\"text-decoration: none; color: black;\">
                        <h5 class=\"card-title\">".substr($product['name'], 0, 20)."</h5>
                    </a>
                    <div class=\"d-flex justify-content-between mb-2 text-danger fs-4 fw-bold\">
                        " . number_format($product['price']) . " đ
                    </div>
                    <form action=\"../components/addtocart.php\" method=\"post\">
                        <input type=\"hidden\" name=\"product_id\" value=\"{$product['id']}\">
                        <input type=\"hidden\" name=\"product_name\" value=\"{$product['name']}\">
                        <input type=\"hidden\" name=\"product_price\" value=\"{$product['price']}\">
                        <input type=\"hidden\" name=\"product_image\" value=\"{$product['img']}\">
                        <button type=\"submit\" class=\"btn btn-primary bg-success\">Thêm vào giỏ</button>
                    </form>
                </div>
            </div>
        </div>
        ";
    }

    function createHomeProductCard($product) {
        return "
        <div class=\"col\">
            <div class=\"card\" style=\"height: 440px;\">
                <img src=\"{$product['img']}\" class=\"card-img-top\" alt=\"Product Image\">
                <div class=\"card-body\">
                    <a href=\"../pages/detail.php?id={$product['id']}\" style=\"text-decoration: none; color: black;\">
                        <h5 class=\"card-title\">".substr($product['name'], 0, 20)."</h5>
                    </a>
                    <div class=\"d-flex justify-content-between mb-2 text-danger fs-4 fw-bold\">
                        " . number_format($product['price']) . " đ
                    </div>
                    <form action=\"../components/addtocart.php\" method=\"post\">
                        <input type=\"hidden\" name=\"product_id\" value=\"{$product['id']}\">
                        <input type=\"hidden\" name=\"product_name\" value=\"{$product['name']}\">
                        <input type=\"hidden\" name=\"product_price\" value=\"{$product['price']}\">
                        <input type=\"hidden\" name=\"product_image\" value=\"{$product['img']}\">
                        <button type=\"submit\" class=\"btn btn-primary bg-success\">Thêm vào giỏ</button>
                    </form>
                </div>
            </div>
        </div>
        ";
    }
?>