<?php 


class Equipe extends Participant{
    
    private $id;
    private $Jeu ;
    private $ClubID;
    private $db;

    public function __construct($id,$jeu,$ClubID,$name)
    {
       parent::__construct($name);
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }


     public function getId(){
      return $this->id ;

   }
   public function setId($id){
      return $this->id = $id ;

   }

   public function getName(){
      return $this->Nom;

   }

    public function setName($nam){
       $this->Nom = $nam ;

   }

    public function getJeu(){
      return $this->Jeu ;

   }

    public function setJeu($Jeu){
       $this-> Jeu = $Jeu ;

   }
  
    public function getClubid(){
      return $this->ClubID ;

   }

    public function setClubid($ClubID){
       $this-> ClubID = $ClubID ;

   }

    

   public function cree(){

      $conect = $this->db -> getConnexion();
      $sql = "INSERT INTO club(Nom, Jeu,Club_id) VALUES(?,?,?)";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute([$this->Nom, $this->Jeu,$this->ClubID]);
     
   }
   
   public function gettAll(){

      $conect = $this->db -> getConnexion();
      $sql = "select  * from Equipe  ";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
      return  $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function update(){

      $conect = $this->db -> getConnexion();
      $sql = "update  Equipe set Nom = ?, Jeu = ? Club_id=? where Club_id = $this->id  ";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute([$this->Nom, $this->Jeu,$this->ClubID]);
     
   }

    public function delete(){

      $conect = $this->db -> getConnexion();
      $sql = "delete from Equipe where Club_id = $this->id";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute();
     
   }
}

 ?>