<?php include_once("header.php");
$products = \Models\Product::all();

?>
<script>
    // var ajaxRequest;  // The variable that makes Ajax possible!
    // function createRequest() {
    //
    //
    //     try {
    //         // Opera 8.0+, Firefox, Safari
    //         ajaxRequest = new XMLHttpRequest();
    //     } catch (e) {
    //         // Internet Explorer Browsers
    //         try {
    //             ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    //         } catch (e) {
    //             try {
    //                 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
    //             } catch (e) {
    //                 // Something went wrong
    //                 alert("Your browser broke!");
    //                 return false;
    //             }
    //         }
    //     }
    //     var url= 13;
    //     ajaxRequest.open("GET","show.php?id="+url,true);
    //     ajaxRequest.send();
    // }

    $(document).ready(function () {
       $('#msg').click(function () {
           $.get("show.php?id=14",function (data,status) {
               // alert("Data: "+ data + "Status: "+ status);
                var dataget=document.getElementById("showhere");
                dataget.insertAdjacentHTML("beforeend",data);
           })
       })
    });
</script>
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
    <div class="container" id="showhere">
        <div class="col-md-12">
            <form>
                <input type="hidden" name="idi" id="idi" value="12">
                <input type ='button' onclick="createRequest()" id="msg" value = 'Query MySQL'/>
            </form>
            <a href="#" class="previous btn btn-primary" id="pre">&laquo; Previous</a>
            <a href="#" class="next btn btn-primary" id="nxt">Next &raquo;</a>
        </div>
    <?php
//    include_once ("show.php");
    ?>

    </div>



    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2" style=" color: black"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. <a href="https://www.Websoul.net" style="color: black">Websoul.net</a></small></p>

    </footer>

<?php include_once("footer.php"); ?>
