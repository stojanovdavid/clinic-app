<?php

include('dbh.class.php');


class Patient extends Dbh{

    
    public function viewPatient($email){

        $sql = "SELECT * FROM patients WHERE email = '$email' ";
        $query = $this->connect()->query($sql);
        $result = $query->fetch();
        return $result;
    }

    public function createPatient($name, $email, $phone, $adress, $medical_condition, $bloodtype){
        $sql = "INSERT INTO patients (name, email, phone, adress, medical_condition, bloodtype) VALUES (:name, :email, :phone, :adress, :medical_condition, :bloodtype)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":adress", $adress);
        $stmt->bindParam(":medical_condition", $medical_condition);
        $stmt->bindParam(":bloodtype", $bloodtype);
        $stmt->execute();
    }


    public function patientsInfo(){
        $sql = "SELECT * FROM patients";
        $query = $this->connect()->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function updatePatientsInfo($id, $name, $email, $phone, $adress, $medical_condition, $bloodtype){
        $sql = "UPDATE patients SET name = :name, email = :email, phone = :phone, adress = :adress, medical_condition = :medical_condition, bloodtype = :bloodtype WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":adress", $adress);
        $stmt->bindParam(":medical_condition", $medical_condition);
        $stmt->bindParam(":bloodtype", $bloodtype);
        $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM patients WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }


}