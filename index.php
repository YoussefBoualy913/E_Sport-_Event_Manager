<?php 
 require("console.php");
 

principale:
while(true){
    echo "============Menu principale================\n";
    echo "1.club\n";
    echo "2.joueur\n";
    echo "3.equipe\n";
    echo "4.Match\n";
    echo "5.tornoi\n";
    echo "6.statistique\n";
    echo "7.Quiter\n";
  

 $console = new Console();
$choix = $console->input("Entre votre choix");
echo "\n";
switch($choix){
   case '1':
    require("club.php");
         while(true){
          echo "**** Menu Club ****\n";
          echo "1. AJouter un club\n";
          echo "2. Modifier un club\n";
          echo "3. Suppime un club\n";
          echo "4. Afficher un club\n";
          echo "5. Menu principale\n";
           
          $choix1 = $console->input("Entre votre choix");
          echo "\n";
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

                case '5':
                  goto principale;
                  break;
               default:
                 echo "Option invalide \n";
                 break;

         }
        }
    break;
    
     case '2':
           require_once("Joueur.php");
            while(true){
          echo "\n";
          echo "**** Menu Joueur ****\n";
          echo "1. AJouter un Joueur\n";
          echo "2. Modifier un Joueur\n";
          echo "3. Suppime un Joueur\n";
          echo "4. Afficher un Joueur\n";
           echo "5. Menu principale\n";
          $choix2 = $console->input("Entre votre choix");
          echo "\n";
         switch($choix2){
                   case '1':
                    $joe = new Joueur();
                    $joe->setNom($console->input("Nom:"));
                    $joe->setRôle($console->input("Rôle:"));
                    $joe->setSalaire($console->input("Salaire:"));
                    $joe->setEquipeID($console->input("id de Equipe:"));
                     echo "\n";
                    $joe->cree();
                    echo "\n";
                    break;

                    case '2':
                      $joe = new Joueur();
                    $joe->setId($console->input("id:"));
                    $joe->setNom($console->input("Nom:"));
                    $joe->setRôle($console->input("Rôle:"));
                    $joe->setSalaire($console->input("Salaire:"));
                    $joe->setEquipeID($console->input("id de Equipe:"));
                    $joe->update();

                    break;

                    case '3':
                    $joe = new Joueur();
                    $joe->setId($console->input("id:"));
                    $joe->delete();
                    break;

                    case '4':
                    $joe = new Joueur();
                    $rows = $joe->gettAll();
                    foreach($rows as $jeour){
                      echo "id:". $jeour['Joueur_id']."\n";
                      echo "Nom:". $jeour['Pseudo']."\n";
                      echo "Role:". $jeour['Rôle']."\n";
                      echo "Salaire:". $jeour['Salaire']."\n";
                      echo " Equipe:". $jeour['Equipe_id']."\n\n";
                    }
               break;

                case '5':
                  goto principale;
                  break;
               default:
                 echo "Option invalide \n";
                 break;

         }
        }
    break;

    case '3':
           require_once("Equipe.php");
            while(true){
          echo "**** Menu Equipe ****\n";

          echo "1. AJouter un Equipe\n";
          echo "2. Modifier un Equipe\n";
          echo "3. Suppime un Equipe\n";
          echo "4. Afficher un Equipe\n";
           echo "5. Menu principale\n";
          $choix2 = $console->input("Entre votre choix");
          echo "\n";
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

                case '5':
                  goto principale;
                  break;
               default:
                 echo "Option invalide \n";
                 break;

         }
        }
    break;

     case '4':
           require_once("Match.php");
            while(true){
          echo "**** Menu Matchs ****\n";

          echo "1. AJouter un Matchs\n";
          echo "2. Modifier un Matchs\n";
          echo "3. Suppime un Matchs\n";
          echo "4. Afficher un Matchs\n";
           echo "5. Menu principale\n";
          $choix2 = $console->input("Entre votre choix");
          echo "\n";
         switch($choix2){
                   case '1':
                    $ma = new Matchs();
                   $ma->setNom($console->input("Nom de match :"));
                    $ma->setTournoi_id($console->input("id de tornement  :"));
                    $ma->cree();
                    break;

                    case '2':
                      $ma = new Matchs();
                    $ma->setId($console->input("id:"));
                    $ma->setNom($console->input("Nom:"));
                    $ma->setTournoi_id($console->input("Tournoi_id:"));
                    $ma->setEquipeA_id($console->input("EquipeA_id:"));
                    $ma->setEquipeB_id($console->input("EquipeB_id:"));
                    $ma->setGagnant_id($console->input("Gagnant_id:"));
                    $ma->setScore_A($console->input("Score_A:"));
                    $ma->setScore_B($console->input("Score_B:"));
                    $ma->update();

                    break;

                    case '3':
                    $ma = new Matchs();
                    $ma->setId($console->input("id:"));
                    $ma->delete();
                    break;
                    
                    case '4':
                    $ma = new Matchs();
                    $rows = $ma->gettAll();
                    foreach($rows as $match){
                      echo "id:". $match['match_id']."\n";
                      echo "Nom:". $match['Nom']."\n";
                      echo "Tournoi_id:". $match['Tournoi_id']."\n";
                      echo "EquipeA_id:". $match['EquipeA_id']."\n";
                      echo "EquipeB_id :". $match['EquipeB_id']."\n";
                      echo "Gagnant_id :". $match['Gagnant_id']."\n";
                      echo "Score_A :". $match['Score_A']."\n";
                      echo "Score_B :". $match['Score_B']."\n\n";
                     
                    }
               break;

               case '5':
                  goto principale;
                  break;
               default:
                 echo "Option invalide \n";
                 break;

         }
        }
    break; 
    
     case '5':
           require_once("Tournoi.php");
            while(true){
          echo "**** Menu Tournoi ****\n";

          echo "1. AJouter un Tournoi\n";
          echo "2. Modifier un Tournoi\n";
          echo "3. Suppime un Tournoi\n";
          echo "4. Afficher un Tournoi\n";
           echo "5. Menu principale\n";
          $choix2 = $console->input("Entre votre choix");
          echo "\n";
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

               
                case '5':
                  goto principale;
                  break;
               default:
                 echo "Option invalide \n";
                 break;

         }
        }
    break;

    case '6':
    require("Statistiques.php");
         while(true){
           echo "\n";
          echo "**** Menu Statistiques ****\n";
          echo "1. Nombre de joueur par Equipe\n";
          echo "2. Tornoi a plus de deux match\n";
          echo "3. Menu principale\n";
          $choix1 = $console->input("Entre votre choix");
          echo "\n";
         switch($choix1){
                case '1':
                  $st = new Statistiques();
                   $st->calculer();
                break;
                case '2':
                  $st = new Statistiques();
                   $st->tornoiMatch();
                break;
                case '3':
                  goto principale;
                  break;
               default:
                 echo "Option invalide \n";
                 break;

         }
        }
    break;

    case '7':
            echo "Fermeture de l'application...";
            exit;

    
    default:
                 echo "Option invalide \n";
                 break;
}
}

?>