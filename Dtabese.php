<?php

class Dtabese{
      
     public $host;
     public $database;
     public $username;
     public $password;

    public function __construct($host,$database,$username,$password){
    $this->host = $host;
    $this->database = $database;
    $this->username = $username;
    $this->password = $password;

    }

    public function getConnexion(){
        try {
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

   }

}

?>
 