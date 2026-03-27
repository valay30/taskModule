<?php
require_once './Product/product.php';

if (isset($_POST['product_id'])) {

    $product = new Product();

    $product->load($_POST['product_id']);

    foreach ($_POST as $key => $value) {
        if ($key != 'product_id' && $value !== '') {
            $product->value($key, $value);
        }
    }

    $product->value('created_date', date('Y-m-d H:i:s'));

    $product->save();
}

header("Location: index.php");
exit;