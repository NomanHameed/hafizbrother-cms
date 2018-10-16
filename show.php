<?php
 include_once("header.php");

    $products = \Models\Product::get("id","17");

    echo $products->source;

?>
