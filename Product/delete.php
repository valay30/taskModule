<?php
require_once './Product/product.php';

if (isset($_POST['ids'])) {

    foreach ($_POST['ids'] as $id) {
        $product = new Product();
        $product->load($id);
        $product->delete();
    }
}

header("Location: index.php");
exit;