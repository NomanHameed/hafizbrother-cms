<?php
define('IS_IN_SCRIPT',1);// define a flag

session_start();
    include_once('../connection.php');

 ?>

<?php  include_once("incl/add-new-header.php"); ?>

<body>

<div class="container">
<br>  <p class="text-center">Welcome To Hafiz Brothers Admin Panel <a href=""></a></p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
<!--    <a href="http://localhost/hafiz/registration-form.php" class="float-right btn btn-outline-primary mt-1">Sign Up</a>-->
    <h4 class="card-title mt-2">Sign In</h4>
</header>
<article class="card-body">
<form method="post" action="login-form.php">
    <div class="form-row">
        <?php
        if(isset($_POST['loginButton'])){

            $email = $_POST['email'];
            $password = $_POST['password'];
            if(empty($email)){
                ?>
                <div class="alert">Email is empty</div>
                <?php
                exit;
            }
            $auth = new Models\Auth();
            $user = $auth->login($email, $password);
            if($user==false){ ?>
                    <label>Error</label>
           <?php
            }else{

                if(isset($_SESSION['login_user'])){
                header("Location:add-product.php");
            }else{
                    header("Location:login.php");
                }
            }
        }

        ?>
    </div> <!-- form-row end.// -->
    <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" placeholder="" name="email">
    </div> <!-- form-group end.// -->
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password">
    </div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name="loginButton" class="btn btn-primary btn-block"> LOG IN  </button>
    </div> <!-- form-group// -->                                                
</form>
</article> <!-- card-body end .// -->
<!--<div class="border-top card-body text-center">Create an account? <a href="http://localhost/hafiz/registration-form.php">SIGN UP</a></div>-->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
<?php
include_once "incl/footer-right.php";
include_once "incl/footer.php";
?>

