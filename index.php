<?php 
 require("console.php");

while(true){
    echo "menu\n";
    echo "1. AJouter un club\n";
    echo "2. Modifier un club\n";
    echo "3. Suppime un club\n";
    echo "4. Afficher un club\n";
    break;
}
 $console = new Console();
$choix = $console->input("Entre votre choix");


?>