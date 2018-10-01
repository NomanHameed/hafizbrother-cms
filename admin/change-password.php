<?php
define('IS_IN_SCRIPT',1);// define a flag

session_start();
if(!isset($_SESSION['login_user'])){
    header("Location:login-form.php");
} else {
    include_once "../connection.php";
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
                        <?php
                        if (isset($_POST['change'])) {
                            $user = new \Models\Auth();
                            $response = $user->ChangePassword($_POST);
                            if (isset($response['messages']['status'])
                                &&
                                count($response['messages']['messages']) > 0
                            ) { ?>
                            <div class="alert alert-<?php echo $response['messages']['status']; ?>">
                                <?php
                                foreach ($response['messages']['messages'] as $message) {
                                    ?>
                                    <div> <?php echo $message; ?></div>
                                    </div>
                                    <?php
                                }
                            }
                        }

                        ?>
                        <form method="post" action="change-password.php">
                            <div class="form-row">
                                <input type="hidden" name="email" value="<?php echo
                                $_SESSION['login_user']; ?>">
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
                                <button type="submit" name="change" class="btn btn-primary btn-block"> Change</button>
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
}
