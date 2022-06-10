<?php

include('header.php');
include('../classes/dbh.class.php');
include('../classes/login.class.php');



if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $login = new Login($email, $hashed);
    var_dump($login->ifLogged());
    die();
    if($login->ifLogged() > 0){
        $_SESSION['is_logged'] = true;
    }else{
        $_SESSION['is_logged'] = false;
    }

    header('Location:../login.php');
}