<?php

include('../classes/patients.class.php');




if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name_edit'];
    $email = $_POST['email_edit'];
    $phone = $_POST['phone_edit'];
    $email = $_POST['email_edit'];
    $medical_condition = $_POST['condition_edit'];
    $bloodtype = $_POST['bloodtype_edit'];
    $update = new Patient;
    $update->updatePatientsInfo($id, $name, $email, $phone, $email, $medical_condition, $bloodtype);

    header('Location:../dashboard.php');
}