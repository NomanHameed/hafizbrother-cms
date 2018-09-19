<?php


if(isset($_SESSION['login_user'])){

    header("Location:add-product.php");
//    print_r($_SESSION);
}else{
    header("Location:login-form.php");

//    print_r($_SESSION);
}

?>