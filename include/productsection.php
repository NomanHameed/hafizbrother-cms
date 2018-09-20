<?php
use Models\Product;
$products= Models\Product::all()->take(8);
?>
<div class="section bg-gradient" id="pricing">
    <div class="container">
        <!-- Gallary -->
        <div class="col-lg-12 text-center call-to-action">
            <h3 style=" color:white; "> Our Products</h3>
        </div>

        <div class="row">

<?php
foreach ($products as $product){
?>
    <div class="col-md-3 col-sm-4" style="margin-top:15px; ">
        <a href="product-images/<?php echo $product->source; ?>" data-lightbox="roadtrip">
            <img src="product-images/thumb/<?php echo $product->source; ?>" class="img-thumbnail">
        </a>
    </div>
<?php
}
?>
        </div>
 <br>

                <div class="col-lg-12 text-center" >
                    <h4> <a href="products.php" style="color: whitesmoke;">View All</a></h4>
                </div>
            </div> 