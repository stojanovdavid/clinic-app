<?php


class Dbh{
    private $serverName;
    private $dbName;
    private $username;
    private $password;


    public function connect(){
        $this->serverName = "localhost";
        $this->dbName = "pabau";
        $this->username = "root";
        $this->password = "";
        try{
            $dbh = new PDO("mysql:host=" . $this->serverName . ";dbname=" . "pabau", $this->username, $this->password);
            return $dbh;
        }
        catch(PDOException $e){
            return $this->e;
        }
    }

}
