<?php

include('header.php');
include('../classes/dbh.class.php');
include('../classes/login.class.php');



if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = new Login($email, $password);

    if($login->ifLogged() > 0){
        $_SESSION['is_logged'] = true;
    }else{
        $_SESSION['is_logged'] = false;
    }

    header('Location:../login.php');
}