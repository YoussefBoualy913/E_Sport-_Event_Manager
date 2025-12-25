
<?php 
require_once 'Dtabese.php';

class Club{
    
    private $id;
    private $name;
    private $ville;
    private $datcrée;
    private $db;

    public function __construct($nom,$ville)
    {
        $this->name = $nom;
        $this->ville = $ville;
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }
   public function creeClub(){

      $conect = $this->db -> getConnexion();
      $sql = "INSERT INTO club(name, ville) VALUES(?,?)";
      $stmt = mysqli_prepare($conect,$sql);
      mysqli_stmt_bind_param($stmt,"ss",$this->name,$this->ville);
      mysqli_stmt_execute($stmt);
   }

    
}

?>