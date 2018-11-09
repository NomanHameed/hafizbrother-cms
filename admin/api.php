<?php
/**
 * Created by PhpStorm.
 * User: haider
 * Date: 11/10/18
 * Time: 12:23 AM
 */
include_once '../connection.php';

if(isset($_POST['item']) && $_POST['item'] == 'products'){

    $products = \Models\Product::all();
    $response = ['status' => 'success', 'data' => $products];
    echo json_encode($response);
}

