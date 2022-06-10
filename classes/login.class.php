<?php


class Login extends Dbh {
    private $email;
    private $password;


    public function __construct($email,$password)
    {

        $this->email = $email;
        $this->password = $password;
    }

    public function ifLogged(){
        $sql = "SELECT * FROM doctors WHERE email = '$this->email' AND password = '$this->password' ";
        $res = $this->connect()->query($sql);
        $count = $res->fetchColumn();
        return $count;
    }
    
}