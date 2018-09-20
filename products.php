<?php include_once("header.php");
    $products = \Models\Product::all();
?>
    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <!-- <img src="" class="img-fluid" alt="Hafiz Brothers"> -->
                        <a class="navbar-brand" href="index.php"><b>Hafiz Brothers</b> </a> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="index.php#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PRODUCTS</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="index.php#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="index.php#contact">CONTACT</a> </li>
                                <!-- <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<!-- <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>OUR PRODUCTS</h1>
</header> -->

  <div class="section bg-gradient" id="pricing" style="padding-top: 70px;">
        <div class="container">
             <!-- Gallary -->
                 <div class="col-lg-12 text-center call-to-action">
                    <h3 style="color: white;">  Our Products</h3>
                </div>
            
             <div class="row">
            <?php foreach ($products as $product){
                ?>
                <div class="col-md-3" style="margin-top: 15px">
             <a href="product-images/<?php echo $product->source; ?>"
                       data-lightbox="roadtrip" data-title="<?php echo "<b>".$product->product_name . "<b>" ; ?>" >
                        <img src="product-images/thumb/<?php echo $product->source; ?>" class="img-thumbnail">
                    </a>
                </div>
            <?php
            } ?>
             </div>
        </div>
  </div>
<?php include_once("footer.php"); ?>