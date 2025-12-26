<?php 


class Tournoi{
    
    private $id;
    private $Titre;
    private $Cashprize;
    private $Salaire;
    private $Format;
    private $Date;
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }
}

    ?>