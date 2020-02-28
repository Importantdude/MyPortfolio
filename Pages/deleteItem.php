<?php

use Controllers\Product;

include "Core/Database/Connect.php";
include "Core/Database/Product.php";
session_start();
include "Block/Head.php";
$product = new Product();

if (isset($_POST['delete1'])) {
    $make = $_POST['pr_Action'];
    if ($make == 'some_Delete' && isset($_POST['del'])) {
        $product->specialDelete();
    }
    if ($make == 'mas_Delete') {
        $product->deleteAll();
    }
    header("location: index.php");
}
$error = '';
if ($_POST) {
    $product = new Product();

    $product->addProduct($product);

    if ($product->isWrong() != '') {
        $error = $product->isWrong();
    } else {
        $product->addItem();
        header("location: index.php");
    }
}