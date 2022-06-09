<?php

include('../classes/patients.class.php');


$deletePatient = new Patient;
$deletePatient->delete($_GET['id']);

header('Location:../dashboard.php');