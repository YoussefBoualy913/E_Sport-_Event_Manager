
<?php 
require_once 'Dtabese.php';

class Club{
    
    private $id;
    private $name;
    private $ville;
    private $datcree;
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

   public function getName(){
      return $this->name;

   }

    public function setName($nam){
       $this->name = $nam ;

   }

    public function getVille(){
      return $this->ville ;

   }

    public function setVille($ville){
       $this-> ville = $ville ;

   }

   public function creeClub(){

      $conect = $this->db -> getConnexion();
      $sql = "INSERT INTO club(name, ville) VALUES(?,?)";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute([$this->name, $this->ville]);
     
   }
   
   public function gettAll(){

      $conect = $this->db -> getConnexion();
      $sql = "select  * from club  ";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
      return  $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function updatClub(){

      $conect = $this->db -> getConnexion();
      $sql = "update  club set name = ?, ville = ? where Club_id = $this->id  ";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute([$this->name, $this->ville]);
     
   }

    public function deleteClub(){

      $conect = $this->db -> getConnexion();
      $sql = "delete from club where Club_id = $this->id";
      $stmt =   $conect-> prepare($sql);
       $stmt->execute();
     
   }
   
}

?>