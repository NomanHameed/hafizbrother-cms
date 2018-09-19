<?php
    include_once "connection.php";
session_start();
    $user= new Models\Auth();
    $user->logout();

?>