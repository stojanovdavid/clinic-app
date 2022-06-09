<?php

include('../classes/dbh.class.php');
include('../classes/signup.class.php');


if(isset($_POST['submit'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpPassword = $_POST['password_confirmation'];

    $signup = new SignUp($firstName, $lastName, $email, $username, $password, $rpPassword);
    $signup->store();
    header('Location: ../dashboard.php');
}