<?php 


class Tournoi{
    
    private $id;
    private $Titre;
    private $Cashprize;
    private $Format;
    private $Date;
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

   public function getTitre(){
      return $this->Titre;

   }

    public function setTitre($Titre){
       $this->Titre = $Titre ;

   }

    public function getCashprize(){
      return $this->Cashprize ;

   }

    public function setCashprize($Cashprize){
       $this-> Cashprize = $Cashprize ;

   }

    public function getFormat(){
      return $this->Format ;

   }

    public function setFormat($Format){
       $this-> Format = $Format ;

   }

    public function getDate(){
      return $this->Date ;

   }

    public function setDate($Date){
       $this-> Date = $Date ;

   }

    

   public function cree(){

      $conect = $this->db -> getConnexion();
      $sql = "INSERT INTO Tournoi(Titre, Cashprize,Format,Date) VALUES(?,?,?,?)";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute([$this->Titre, $this->Cashprize,$this->Format,$this->Date]);
     
   }
   
   public function gettAll(){

      $conect = $this->db -> getConnexion();
      $sql = "select  * from Tournoi  ";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
      return  $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function update(){

      $conect = $this->db -> getConnexion();
      $sql = "update  Tournoi set Titre = ?, Cashprize = ?,Format= ?,Date = ? where Tournoi_id = $this->id ";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute([$this->Titre, $this->Cashprize,$this->Format,$this->Date]);
     
   }

    public function delete(){

      $conect = $this->db -> getConnexion();
      $sql = "delete from Tournoi where Tournoi_id = $this->id";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute();
     
   }
}

    ?>