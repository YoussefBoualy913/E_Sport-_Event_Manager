<?php 
 require("console.php");
 require("club.php");

while(true){
    echo "============Menu principale================\n";
    echo "1.club\n";
    echo "2.joueur\n";
    echo "3.equipe\n";
    echo "4.Match\n";
    echo "5.tornoi\n";
    echo "6.statistique\n";
    break;
}
 $console = new Console();
$choix = $console->input("Entre votre choix\n");

switch($choix){
   case '1':
    
          echo "-----------------Menu Club---------------\n";
          echo "1. AJouter un club\n";
          echo "2. Modifier un club\n";
          echo "3. Suppime un club\n";
          echo "4. Afficher un club\n";
          $choix1 = $console->input("Entre votre choix");
         switch($choix1){
                   case '1':
              $cl = new Club();
              $cl->setName($console->input("name:"));
              $cl->setville($console->input("ville:"));
              $cl->creeClub();
               break;

              case '2':
              $cl = new Club();
              $cl->setId($console->input("id:"));
              $cl->setName($console->input("name:"));
              $cl->setville($console->input("ville:"));
              $cl->updatClub();
               break;

               case '3':
              $cl = new Club();
              $cl->setId($console->input("id:"));
              $cl->deleteClub();
               break;
             case '4':
             $cl = new Club();
             $rows = $cl->gettAll();
              foreach($rows as $club){
                echo "id:". $club['Club_id']."\n";
                echo "name:". $club['name']."\n";
                echo "ville:". $club['ville']."\n\n";
              }
               break;
               default:
                 echo "Option invalide ";
                 break;

         }
    break; 

    case '3':
           require_once("Equipe.php");
          echo "-----------------Menu Equipe-------------------\n";

          echo "1. AJouter un Equipe\n";
          echo "2. Modifier un Equipe\n";
          echo "3. Suppime un Equipe\n";
          echo "4. Afficher un Equipe\n";
          $choix2 = $console->input("Entre votre choix");
         switch($choix2){
                   case '1':
                    $eq = new Equipe();
                    $eq->setNom($console->input("Nom:"));
                    $eq->setJeu($console->input("jue:"));
                    $eq->setClubid($console->input("id de clube:"));
                    $eq->cree();
                    break;

                    case '2':
                      $eq = new Equipe();
                    $eq->setId($console->input("id:"));
                    $eq->setNom($console->input("Nom:"));
                    $eq->setJeu($console->input("jue:"));
                    $eq->setClubid($console->input("id de clube:"));
                    $eq->update();

                    break;

                    case '3':
                    $eq = new Equipe();
                    $eq->setId($console->input("id:"));
                    $eq->delete();
                    break;

                    case '4':
                    $eq = new Equipe();
                    $rows = $eq->gettAll();
                    foreach($rows as $equip){
                      echo "id:". $equip['Equipe_id']."\n";
                      echo "Nom:". $equip['Nom']."\n";
                      echo "Jeu:". $equip['Jeu']."\n";
                      echo "clube :". $equip['Club_id']."\n\n";
                    }
               break;
               default:
                 echo "Option invalide ";
                 break;

         }
    break;
    
     case '5':
           require_once("Tournoi.php");
          echo "-----------------Menu Tournoi-------------------\n";

          echo "1. AJouter un Tournoi\n";
          echo "2. Modifier un Tournoi\n";
          echo "3. Suppime un Tournoi\n";
          echo "4. Afficher un Tournoi\n";
          $choix2 = $console->input("Entre votre choix");
         switch($choix2){
                   case '1':
                    $eq = new Tournoi();
                    $eq->setTitre($console->input("Titre:"));
                    $eq->setCashprize($console->input("Cashprize:"));
                    $eq->setFormat($console->input("Forma:"));
                    $eq->setDate($console->input("Date:"));
                    $eq->cree();
                    break;

                    case '2':
                      $eq = new Tournoi();
                    $eq->setId($console->input("id:"));
                    $eq->setTitre($console->input("Titre:"));
                    $eq->setCashprize($console->input("Cashprize:"));
                    $eq->setFormat($console->input("Format:"));
                    $eq->setDate($console->input("Date:"));
                    $eq->update();

                    break;

                    case '3':
                    $eq = new Tournoi();
                    $eq->setId($console->input("id:"));
                    $eq->delete();
                    break;
                    
                    case '4':
                    $eq = new Tournoi();
                    $rows = $eq->gettAll();
                    foreach($rows as $equip){
                      echo "id:". $equip['Tournoi_id']."\n";
                      echo "Titre:". $equip['Titre']."\n";
                      echo "Cashprize:". $equip['Cashprize']."\n";
                      echo "Format :". $equip['Format']."\n";
                      echo "Date :". $equip['Date']."\n\n";
                    }
               break;
               default:
                 echo "Option invalide ";
                 break;

         }
    break; 
    
    default:
                 echo "Option invalide ";
                 break;
}

?>