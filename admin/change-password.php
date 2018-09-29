<?php
define('IS_IN_SCRIPT',1);// define a flag
session_start();
include_once "../connection.php";
$aut=new \Models\Auth;
//if($aut->isLoggedIn()){
//    $aut->redirectToChangePasswordPage();
//}
$message= isset($_GET['message']) ? $_GET['message'] : '';

    if(isset($_POST['change'])){
            $n_password= $_POST['new_password'];
            $c_password=$_POST['confirm_password'];
            if(empty($n_password) || empty($c_password) ) {
                $message="Please Fill all Fields";
            }else{
                if($n_password == $c_password){
                    $auth = new Models\Auth();
//                    $auth->login($email, $password);

                }else{
                    $message= "Passwords Not Match";
                }
            }

    }

    include_once "incl/add-new-header.php";
    include_once "incl/navbar.php";
?>

    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <!--    <a href="http://localhost/hafiz/registration-form.php" class="float-right btn btn-outline-primary mt-1">Sign Up</a>-->
                        <h4 class="card-title mt-2">Change Password</h4>
                    </header>
                    <article class="card-body">
                        <?php if(!empty($message)) {
                            ?>
                            <div class="alert alert-danger"><?php echo $message; ?></div>
                            <?php
                        } ?>
                        <form method="post" action="change-password.php">
                            <div class="form-row">

                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="" name="new_password">
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="confirm_password">
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <button type="submit" name="change" class="btn btn-primary btn-block"> Change  </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article> <!-- card-body end .// -->
                    <!--<div class="border-top card-body text-center">Create an account? <a href="http://localhost/hafiz/registration-form.php">SIGN UP</a></div>-->
                </div> <!-- card.// -->
            </div> <!-- col.//-->

        </div> <!-- row.//-->


    </div>

<?php

    include_once "incl/footer.php";
