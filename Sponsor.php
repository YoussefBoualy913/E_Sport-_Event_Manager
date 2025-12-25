<?php 


class Club{
    
    private $id;
    private $Nom;
    private $Contribution ;
    private $TournoiID;
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }
}

 ?>