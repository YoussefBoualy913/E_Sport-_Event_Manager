<?php 
require_once 'Dtabese.php';

class Statistiques{
    
    private $db;

    public function __construct()
    {
       
       $this-> db = new Dtabese("localhost","e_sport_event_manager","root","");
    }


public function nmbreJourePareque(){
     $conect = $this->db -> getConnexion();
      $sql = "SELECT club.name,equipe.Nom,COUNT(joueur.Joueur_id) as Nombrejoueur
              FROM club
              left JOIN equipe on club.Club_id = equipe.Club_id
              left JOIN joueur on equipe.Equipe_id = joueur.Equipe_id
              GROUP by club.name,equipe.Nom
              ORDER by Nombrejoueur DESC;";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "clube:". $row['name']."\tEquipe:". $row['Nom']."\tNombre de joueur:". $row['Nombrejoueur']."\n";
       }
      
}

public function tornoiMatch(){
     $conect = $this->db -> getConnexion();
      $sql = "SELECT tournoi.Titre,COUNT(matche.Nom) as nbmatche
              FROM tournoi
              left JOIN matche on tournoi.Tournoi_id = matche.Tournoi_id
              GROUP BY tournoi.Titre
              HAVING nbmatche > 2;";
      $stmt =   $conect-> prepare($sql);
      $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "tournoi:". $row['Titre']."\tNombre de Matche:". $row['nbmatche']."\n";
       }
      
}

}

 ?>