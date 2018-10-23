<?php

use Models\Product;
include_once ("connection.php");
// include_once("header.php");
$id= $_GET['id'];
//$id=13;
$products= Product::find($id);

    $result= json_encode($products);



?>


<br>
<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-7 col-sm-8 align-content-center">
            <img width="500" height="450" src="product-images/<?php echo $products->source; ?>" alt="Sorry">
        </div>
        <div class="col-md-5 col-sm-4 align-content-center">
            <h2 id="heading123"><?php echo $products->product_name; ?></h2>
            <p><?php echo $products->product_code; ?></p>
        </div>
    </div>
</div>

