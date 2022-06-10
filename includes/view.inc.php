<?php

include('../classes/patients.class.php');
include('header.php');


$email = $_POST['email'];

$view = new Patient;
$patient = $view->viewPatient($email);
?>


<?php
$patients = new Patient;
?>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th>Phone number</th>
      <th>Adress</th>
      <th>Medical condition</th>
      <th>Blood Type</th>
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><?= $patient['id'] ?></td>
          <td><?= $patient['name'] ?></td>
          <td><?= $patient['email'] ?></td>
          <td><?= $patient['phone'] ?></td>
          <td><?= $patient['adress'] ?></td>
          <td><?= $patient['medical_condition'] ?></td>
          <td><?= $patient['bloodtype'] ?></td>
      </tr>
  </tbody>
</table>

<?php include('footer.php'); ?>