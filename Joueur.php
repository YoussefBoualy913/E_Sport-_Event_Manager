<?php 


class Club{
    
    private $id;
    private $Pseudo;
    private $Rôle;
    private $Salaire;
    private $EquipeID;
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }
}

    ?>