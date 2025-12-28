<?php 


class Matchs{
    
    private $id;
    private $Nom;
    private $Score_A;
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

    public function getScore_A(){
      return $this->Score_A ;

   }

    public function setScore_A($Score_A){
       $this-> Score_A = $Score_A ;

   }

    public function getScore_B(){
      return $this->Score_B ;

   }

    public function setScore_B($Score_B){
       $this-> Score_B = $Score_B ;

   }
  
    public function getEquipeA_id(){
      return $this->EquipeA_id ;

   }

    public function setEquipeA_id($EquipeA_id){
       $this-> EquipeA_id = $EquipeA_id ;

   }

   public function getEquipeB_id(){
      return $this->EquipeB_id ;

   }

    public function setEquipeB_id($EquipeB_id){
       $this-> EquipeB_id = $EquipeB_id ;

   }

   public function getTournoi_id(){
      return $this->Tournoi_id ;

   }

    public function setTournoi_id($Tournoi_id){
       $this-> Tournoi_id = $Tournoi_id ;

   }

   public function getGagnant_id(){
      return $this->Gagnant_id ;

   }

    public function setGagnant_id($Gagnant_id){
       $this-> Gagnant_id = $Gagnant_id ;

   }

    public function cree(){
      
      $conect = $this->db -> getConnexion();
      $sql1 = "select  Equipe_id from Equipe ";
      $stmt = $conect ->prepare($sql1);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $kyes = array_keys($rows);
      
      shuffle($kyes);
      $newarray =[];
      foreach($kyes as $key){
          $newarray[$key] = $rows[$key];
          
        }
        
        $premiertValue = reset($newarray);
        $derniertValue = end($newarray);
       
        $this->EquipeA_id = $premiertValue['Equipe_id'];
        $this->EquipeB_id = $derniertValue['Equipe_id'];

        $this->Score_A = rand(0,100);
        $this->Score_B = rand(0,100);
        
        if($this->Score_A >  $this->Score_B){
             $this->Gagnant_id = $this->EquipeA_id;
        }else{
             $this->Gagnant_id = $this->EquipeB_id;
        }

      $sql = "INSERT INTO Matche(Nom, Score_A,Score_B,EquipeA_id,EquipeB_id,Tournoi_id,Gagnant_id)
       VALUES(?,?,?,?,?,?,?)";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute([$this->Nom, $this->Score_A,$this->Score_B,$this->EquipeA_id,$this->EquipeB_id,$this->Tournoi_id,$this->Gagnant_id]);
     echo "le match a etait generer avec succé";
   }

   public function gettAll(){

      $conect = $this->db -> getConnexion();
      $sql = "select  * from Matche  ";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
      return  $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function update(){

      $conect = $this->db -> getConnexion();
      $sql = "update  Matche set Nom = ?, Score_A = ?, Score_B = ?, EquipeA_id = ?, EquipeB_id = ?, Tournoi_id = ?,Gagnant_id = ? where match_id = $this->id ";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute([$this->Nom, $this->Score_A,$this->Score_B,$this->EquipeA_id,$this->EquipeB_id,$this->Tournoi_id,$this->Gagnant_id]);
     
   }

    public function delete(){

      $conect = $this->db -> getConnexion();
      $sql = "delete from Matche where match_id = $this->id";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute();
     
   }

}

 ?>