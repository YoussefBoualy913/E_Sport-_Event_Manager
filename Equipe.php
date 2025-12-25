<?php 


class Club{
    
    private $id;
    private $Nom;
    private $Jeu ;
    private $ClubID;
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }
}

 ?>