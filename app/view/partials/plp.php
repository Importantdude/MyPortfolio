<?php

use \Controllers\Product;
include "../Pages/Block/Head.php";

?>

<div>
    <select id="task-Action" name="pr_Action">
        <option value="some_Delete">Delete some products</option>
        <option value="mas_Delete">Delete all products</option>
    </select>
    <input type="submit" name="delete1" value="Apply" class="button">
</div>
<div class="columnCatalog" id="task-Action">
    <div class="content">

        <?php
        $product = new Product;
        $productList = $product->getProduct();
        while ($row = $productList->fetch()) {

            ?>

            <div class="product-box">
                <div class="check-box">
                    <input type="checkbox" class="check-box"
                           name="del[<?= $key = $row['id'] ?>]">
                </div>
                <div class="prDescription">
                    <?php
                    $product->compareType($row);
                    ?>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</div>