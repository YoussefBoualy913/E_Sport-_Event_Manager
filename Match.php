<?php 


class Matchs{
    
    private $id;
    private $Nom;
    private $Score_A ;
    private $Score_B;
    private $EquipeA_id;
    private $EquipeB_id;
    private $Tournoi_id;
    private $Gagnant_id;
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }
}

 ?>