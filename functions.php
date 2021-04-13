<?php
    require('database/DBController.php');
    require('database/Product.php');
    require('database/brands.php');
    $db = new DBController();
    $product = new Product($db);
    $marca = new Marcas($db);
?>