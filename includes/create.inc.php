<?php

include('../classes/patients.class.php');



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $medical_condition = $_POST['condition'];
    $bloodtype = $_POST['bloodtype'];

    $create = new Patient;
    $create->createPatient($name, $email, $phone, $adress, $medical_condition, $bloodtype);
    header('Location:../dashboard.php');
}