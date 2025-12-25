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

   return mysqli_connect( $this->host, $this->database, $this->password,);

   }

}

?>
 