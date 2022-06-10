<?php
include('./classes/patients.class.php');
include('./includes/header.php');
$patients = new Patient;
?>



<button type="button" class="btn btn-primary" id="createPatient" data-bs-toggle="modal" data-bs-target="#createModal">Add new patient</button>
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="includes/create.inc.php" method="POST">
                <div class="modal-body">
                    <div class="info text-dark">
                        <label for="">Name</label> <br>
                        <input type="text" name="name" required> <br>
                        <label for="">Email</label> <br>
                        <input type="text" name="email" required> <br>
                        <label for="">Phone</label> <br>
                        <input type="text" name="phone" required> <br>
                        <label for="">Adress</label> <br>
                        <input type="text" name="adress" required> <br>
                        <label for="">Medical condition</label> <br>
                        <input type="text" name="condition" required> <br>
                        <label for="">Bloodtype</label> <br>
                        <input type="text" name="bloodtype" required> <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" id="insertButton" class="btn btn-primary">Add patient</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<table class="table table-dark mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th>Phone number</th>
      <th>Adress</th>
      <th>Medical condition</th>
      <th>Blood Type</th>
      <th>Info</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($patients->patientsInfo() as $key => $patient) : ?>
        <tr id="<?= $patient['id'] ?>">
            <th scope="row"><?= $patient['id'] ?></th>
            <td><?= $patient['name'] ?></td>
            <td><?= $patient['email'] ?></td>
            <td><?= $patient['phone'] ?></td>
            <td><?= $patient['adress'] ?></td>
            <td><?= $patient['medical_condition'] ?></td>
            <td><?= $patient['bloodtype'] ?></td>
            <td>
                <button type="button" class="btn btn-info" id="infoBtn" id="info" data-bs-toggle="modal" data-bs-target="#infoModal<?= $patient['id'] ?>">Info</button>
                <div class="modal fade" id="infoModal<?= $patient['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="info text-dark">
                                <h1>Name:</h1> <p id="patientName"><?= $patient['name'] ?></p>
                                <h1>Email:</h1> <p id="patientEmail"><?= $patient['email'] ?></p>
                                <h1>Phone:</h1> <p id="patientPhone"><?= $patient['phone'] ?></p>
                                <h1>Adress:</h1> <p id="patientAdress"><?= $patient['adress'] ?></p>
                                <h1>Medical Condition:</h1> <p id="patientMedicalCondition"><?= $patient['medical_condition'] ?></p>
                                <h1>Bloodtype:</h1> <p id="patientBloodtype"><?= $patient['bloodtype'] ?></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $patient['id'] ?>">Edit</button>
                <div class="modal fade" id="editModal<?= $patient['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="includes/update.inc.php" method="POST">
                            <div class="modal-body">
                                <div class="edit text-dark">
                                    <input type="text" name="id" value="<?= $patient['id'] ?>" hidden>
                                    <label for="">Name</label> <br>
                                    <input type="text" name="name_edit" value="<?= $patient['name'] ?>"> <br>
                                    <label for="">Email</label> <br>
                                    <input type="text" name="email_edit" value="<?= $patient['email'] ?>"> <br>
                                    <label for="">Phone</label> <br>
                                    <input type="text" name="phone_edit" value="<?= $patient['phone'] ?>"> <br>
                                    <label for="">Adress</label> <br>
                                    <input type="text" name="adress_edit" value="<?= $patient['adress'] ?>"> <br>
                                    <label for="">Medical condition</label> <br>
                                    <input type="text" name="condition_edit" value="<?= $patient['medical_condition'] ?>"> <br>
                                    <label for="">Bloodtype</label> <br>
                                    <input type="text" name="bloodtype_edit" value="<?= $patient['bloodtype'] ?>"> <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $patient['id'] ?>">Delete</button>
                <div class="modal fade" id="deleteModal<?= $patient['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="delete text-dark">
                                <p>Are you sure you want to delete this patient?</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="includes/delete.inc.php?id=<?= $patient['id'] ?>"><button type="button" class="btn btn-primary">Delete</button></a>
                        </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
      <?php endforeach ?>  
  </tbody>
</table>

<?php include('./includes/footer.php'); ?>