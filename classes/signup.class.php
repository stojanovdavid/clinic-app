<?php



class SignUp extends Dbh {
    private $firstName;
    private $lastName;
    private $username;
    private $email;
    private $password;
    private $rpPassword;


    public function __construct($firstName, $lastName, $email, $username, $password, $rpPassword)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->rpPassword = $rpPassword;
    }

    public function store(){

        $stmt = $this->connect()->prepare("INSERT INTO doctors (firstName, lastName, email, username, password, rp_password) VALUES (:firstName, :lastName, :email, :username, :password, :rpPassword)");
        $stmt->bindParam(":firstName", $this->firstName);
        $stmt->bindParam(":lastName", $this->lastName);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":rpPassword", $this->rpPassword);
        $stmt->execute();
    }
}