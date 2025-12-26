<?php 
 require("console.php");
 require("club.php");

while(true){
    echo "menu\n";
    echo "1.club\n";
    echo "2.joueur\n";
    echo "3.equipe\n";
    echo "4.Match\n";
    break;
}
 $console = new Console();
$choix = $console->input("Entre votre choix");
switch($choix){
   case '1':
    
    echo "menu Club\n";
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
    }     
}

?>