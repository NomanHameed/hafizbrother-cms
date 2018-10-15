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

     <header class="bg-gradient" id="home">
<!--         <div class="col-lg-12 text-center call-to-action">-->
<!--             <h3 style="color: white;">  Our Products</h3>-->
<!--         </div>-->
<!--         <br>-->
    </header>
    <br><br>
    <div class="container">
<div class="col-md-12">
    <a href="#" class="previous btn btn-primary" id="pre">&laquo; Previous</a>
    <a href="#" class="next btn btn-primary" id="nxt">Next &raquo;</a>
</div>
        <br>
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-7 col-sm-8 align-content-center">
                        <img width="500" height="450" src="images/man.jpg" alt="Sorry">
                    </div>
                    <div class="col-md-5 col-sm-4 align-content-center">
                <h2>Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                            congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                        </p>
                    </div>
                </div>
            </div>

    </div>



    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2" style=" color: black"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. <a href="https://www.Websoul.net" style="color: black">Websoul.net</a></small></p>

    </footer>

<?php include_once("footer.php"); ?>
