<?php 
require_once('participant.php');

class Joueur extends participant{
    
    private $id;
    private $Rôle;
    private $Salaire;
    private $EquipeID;
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }

     public function getId(){
      return $this->id ;

   }
   public function setId($id){
      return $this->id = $id ;

   }

   public function getNom(){
      return $this->Nom;

   }

    public function setNom($nam){
       $this->Nom = $nam ;

   }

    public function getRôle(){
      return $this->Rôle ;

   }

    public function setRôle($Rôle){
       $this-> Rôle = $Rôle ;

   }
  
    public function getSalaire(){
      return $this->Salaire ;

   }

    public function setSalaire($Salaire){

       $this-> Salaire = $Salaire ;

   }
   
    public function getEquipeID(){
      return $this->EquipeID ;

   }

    public function setEquipeID($EquipeID){

       $this-> EquipeID = $EquipeID ;

   }

    

   public function cree(){

    //   $conect = $this->db -> getConnexion();
    //   $sql = "INSERT INTO Joueur(Pseudo,Rôle,Salaire,Equipe_id) VALUES(?,?,?,?)";
    //   $stmt =   $conect-> prepare($sql);
    //   $stmt->execute([$this->Nom, $this->Rôle,$this->Salaire,$this->EquipeID]);
    //   if($stmt){
        echo "le Joueur a etait ajouter avec succee";
    //   }
     
   }
   
   public function gettAll(){

      $conect = $this->db -> getConnexion();
      $sql = "select  * from Joueur  ";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
      return  $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function update(){

      $conect = $this->db -> getConnexion();
      $sql = "update  Joueur set Pseudo = ?, Rôle = ?, Salaire = ?,Equipe_id = ?  where Joueur_id = $this->id ";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute([$this->Nom, $this->Rôle,$this->Salaire,$this->EquipeID]);
     
   }

    public function delete(){

      $conect = $this->db -> getConnexion();
      $sql = "delete from Joueur where Club_id = $this->id";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute();
     
   }


}

    ?>