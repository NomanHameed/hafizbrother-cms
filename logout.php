<?php
    include_once "connection.php";

    $user= new Models\Auth();
    $user->logout();

?>