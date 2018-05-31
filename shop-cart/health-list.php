<div id="product-grid">
    <div class="txt-heading">
        <div class="txt-heading-label">Products</div>
    </div>
    <?php
    $query = "SELECT * FROM tbl_product";
    $product_array = $shoppingCart->getAllProduct($query);
    if (! empty($product_array)) {
        foreach ($product_array as $key => $value) {
          if ($product_array[$key]["categ_id"] == 10 && $product_array[$key]["gm_id"] == 2) {
            // code...

            ?>
        <div class="product-item">
        <form method="post"
            action="health.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
            <div class="product-image">
                <img src="<?php echo $product_array[$key]["image"]; ?>">
                <div class="product-title">
                    <?php echo $product_array[$key]["name"]; ?>
                    <?php echo $product_array[$key]["itm_descrip"]; ?>
                </div>
            </div>
            <div class="product-footer">
                <div class="float-right">
                    <input type="text" name="quantity" value="1"
                        size="2" class="input-cart-quantity" /><input type="image"
                        src="add-to-cart.png" class="btnAddAction" />
                </div>
                <div class="product-price float-left" id="product-price-<?php echo $product_array[$key]["code"]; ?>"><?php echo "$".$product_array[$key]["price"]; ?></div>

            </div>
        </form>
    </div>
    <?php }
        }
    }
    ?>
</div>
