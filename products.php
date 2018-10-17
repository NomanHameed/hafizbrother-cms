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
<script>
    $(document).ready(function () {
        $('.msg').click(function () {
            var idd=document.getElementsByClassName("pid").value;
            // $.get("show.php?id="+idd,function (data,status) {
                alert("Data: "+ idd);

                var dataget=document.getElementById("showhere");
                dataget.insertAdjacentHTML("beforeend",data);
            // })
        })
    });
</script>

  <div class="section bg-gradient" id="pricing" style="padding-top: 70px;">
        <div class="container">
             <!-- Gallary -->
                 <div class="col-lg-12 text-center call-to-action">
                    <h3 style="color: white;">  Our Products</h3>
                </div>
            <div class="col-md-12" id="showhere">
                <div class="row">
<!--                    <div class="col-md-5">-->
<!--                        <img src="product-images/13-12.jpg" width="400px" alt="sorry" id="im">-->
<!--                        <p id="de"></p>-->
<!--                    </div><div class="col-md-1"></div>-->
<!--                    <div class="col-md-6 col-offset-md-1">-->
<!--                        <h1>heading</h1>-->
<!--                        <p>askdjfbaksjdfkajsbfasjkldf</p>-->
<!--                        <p>askdjfbaksjdfkajsbfasjkldf</p>-->
<!--                        <p>askdjfbaksjdfkajsbfasjkldf</p>-->
<!--                    </div>-->
                </div>
                 <br>
                    <div class="row">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>


            <div class="col-md-12">

            <div class="row">
                <?php foreach ($products as $product){
                    ?>
                    <div  class="col-md-3" style="margin-top: 15px"  >

                        <input type="text" name="id[]" class="pid" value="<?php echo $product->id; ?>">
                        <img src="product-images/thumb/<?php echo $product->source; ?>"
                              class="msg img-thumbnail imgg" name="imagename[]" >

                    </div>
                    <?php
                } ?>
            </div>
            </div>

        </div>
  </div>
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2" style=" color: black"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. <a href="https://www.Websoul.net" style="color: black">Websoul.net</a></small></p>

    </footer>
<?php include_once("footer.php"); ?>
