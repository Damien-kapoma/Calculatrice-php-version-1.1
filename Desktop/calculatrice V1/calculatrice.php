<?php
	
	$nombre = null;
	$nombres = [];
echo "---- Faites votre choix ----\n";
echo "1. Addition\n";
echo "2. Multiplication\n";
echo "3. Soustraction\n";
echo "4. Division\n";
echo "5. Quitter \n";

$choix =(int)readline("Entrez votre choix :");

    while ($choix !== 1 &&
           $choix !== 2 &&
           $choix !== 3 &&
           $choix !== 4 &&
           $choix !== 5){

        echo "---- Faites votre choix ----\n";
        echo "1. Addition\n";
        echo "2. Multiplication\n";
        echo "3. Soustraction\n";
        echo "4. Division\n";
        echo "5. Quitter \n";

        
        echo "votre choix est invalide \n";
        $choix = (int)readline ("Entrez votre choix :");
    }



 // logique pour la multiplication
if ($choix == 2) {

    echo "Entrez des nombres à multiplier. Tapez = pour arrêter.\n";

    while ($nombre !== '=') {

        $nombre = readline("Votre nombre : ");

        if ($nombre !== '=') {
            $nombres[] = (float)$nombre;
        }
    }

    $resultat = 1;

    foreach ($nombres as $valeur) {
        $resultat *= $valeur;
    }

    echo "Le résultat de la multiplication est : $resultat\n";
}
//fin logique
//logique pour l'addition
elseif ($choix == 1) {

    echo ("Entrez des nombres à additionner et Tapez = pour arrêter la selection \n "); 

    while ($nombre !== '='){
        $nombre =readline ("votre nombre : \n ");
    
        if ($nombre !== '='){
        
        $nombres[] = (float)$nombre;
    }
    }
    $resultat = 0 ;
   
        foreach ($nombres as $valeur){
            $resultat += $valeur;
    }

 echo " l'addition de vos nombres donnent : $resultat"; }
 
 //fin logique
    
//logique soustraction 
 elseif ($choix == 3) {

    echo "Entrez des nombres à soustraire. Tapez = pour arrêter.\n";

    while ($nombre !== '=') {

        $nombre = readline("Votre nombre : ");

        if ($nombre !== '=') {
            $nombres[] = (float)$nombre;
        }
    }

    if (count($nombres) > 0) {

        $resultat = array_shift($nombres);

        foreach ($nombres as $valeur) {
            $resultat -= $valeur;
        }

        echo "La soustraction de vos nombres donnent : $resultat\n";
    }
} 
    //fin logique

    //logique division
	elseif ($choix == 4) {

    $nombre = null;

    echo "Entrez des nombres à diviser. Tapez = pour arrêter.\n";

    while ($nombre !== '=') {

        $nombre = readline("Votre nombre : ");

        if ($nombre !== '=') {
            $nombres[] = (float)$nombre;
        }
    }

    if (count($nombres) > 0) {

        $resultat = array_shift($nombres);

        foreach ($nombres as $valeur) {

            if ($valeur == 0) {
                echo "Erreur : division par zéro impossible.\n";
                exit;
            }

            $resultat /= $valeur;
        }

        echo "La division de vos nombres donne : $resultat\n";
    }
}
// fin logique

//logiaue Quitter
elseif($choix == 5){
    echo "merci d'avoir utiliser notre calcuatrice";
}


?>
