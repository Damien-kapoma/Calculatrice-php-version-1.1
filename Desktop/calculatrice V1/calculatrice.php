<?php
	
	$nombre = null; 
	$nombres = [];
    $nombres_c = [];
    $nombres_x = [];
    $nombres_x2 = [];
echo "---- Faites votre choix ----\n";
echo "1. Addition\n";
echo "2. Multiplication\n";
echo "3. Soustraction\n";
echo "4. Division\n";
echo "5. Equation mathematique \n";
echo "6. Quitter \n";

$choix =(int)readline("Entrez votre choix :");

    while ($choix !== 1 &&
           $choix !== 2 &&
           $choix !== 3 &&
           $choix !== 4 &&
           $choix !== 5 &&
           $choix !== 6){

        echo "votre choix est invalide \n";
        echo "----------------------------\n";
        echo "---- Faites votre choix ----\n";
        echo "1. Addition\n";
        echo "2. Multiplication\n";
        echo "3. Soustraction\n";
        echo "4. Division\n";
        echo "5. Equation mathematique \n";
        echo "6. quitter \n";

        
        
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


//logique equation degre 1 et degre 2 

elseif ($choix == 5){
    echo ("vous voulez resoudre \n 1. une équation du premier degré \n 2. une équation du deuxieme degré \n");
    $choix = (int)readline("entrez votre choix :"); }

    //logique équation premier degré

if ($choix == 1) {

    echo "Vous avez choisi l'option 1 : le calcul d'une équation du premier degré\n";
    echo "Forme : a1x + a2x + a3x + ... + c1 + c2 + ... = 0\n";

    $x_var = (float) readline("Entrez le premier coefficient de x : ");

    while ($x_var == 0) {
        $x_var = (float) readline("Le coefficient ne peut pas être 0. Réessayez : ");
    }

    // On enregistre le premier coefficient
    $nombres_x[] = $x_var;

    echo "Pour arrêter la saisie des coefficients, tapez n\n";

    while (true) {

        $x_var = readline("Votre coefficient : ");

        if ($x_var === "n") {
            break;
        }

        $nombres_x[] = (float)$x_var;
    }

    $resultat_x = 0;

    foreach ($nombres_x as $valeur) {
        $resultat_x += $valeur;
    }

    echo "--------------------------------------------------\n";

    echo "Pour arrêter la saisie des constantes, tapez fin\n";

    $c_var = readline("Entrez une constante : ");

    while ($c_var !== "fin") {

        $nombres_c[] = (float)$c_var;

        $c_var = readline("Entrez une autre constante : ");
    }

    $resultat = 0;

    foreach ($nombres_c as $valeur) {
        $resultat += $valeur;
    }

    $reponse = -$resultat / $resultat_x;

    echo "Somme des coefficients : $resultat_x\n";
    echo "Somme des constantes : $resultat\n";
    echo "La solution de l'équation est : x = $reponse\n";
}
    // fin logique equation premier degre
    


    //logique deuxieme degre
    
         
    if ($choix == 2){
        echo "Vous avez choisi l'option 2 : le calcul d'une équation du second degré\n";
        echo "Forme : ax² + bx + c1 + c2 + ... = 0\n";

    


while (true)
{
    $x_var2 = (int) readline("Entrez le coefficient de x² (0 pour terminer) : ");

    if ($x_var2 === 0)
    {
        break;
    }

    $nombres_x2[] = $x_var2;
}

$resultat_x2 = 0;

foreach ($nombres_x2 as $valeur)
{
    $resultat_x2 += $valeur;
}

while(true){
    $x_var = readline ("entrez le deuxieme coefficient X : ");

    if ($x_var === "n"){
        break;
    }

    $nombres_x [] = $x_var;
}
$resultat_x = 0;

foreach($nombres_x as $valeur){
    $resultat_x += $valeur;
}



    

    $nombres_c = [];

    echo "Pour arrêter la saisie des constantes, tapez fin\n";

    $c_var = readline("Entrez une constante : ");

    while ($c_var !== "fin") {

        $nombres_c[] = (float) $c_var;

        $c_var = readline("Entrez une autre constante : ");
    }

    $resultat = 0;

    foreach ($nombres_c as $valeur) {
        $resultat += $valeur;
    }

    $reponse = -$resultat / $resultat_x2;

if ($reponse < 0) {
    echo "La somme des coefficients x² est :  $resultat_x2 \n ";
    echo "La somme des coefficients x est :  $resultat_x \n ";
    echo "La somme des constantes est : $resultat\n";
    echo "Pas de solution réelle : le résultat sous la racine est négatif.\n";
} 

else {
    $reponse = sqrt($reponse);
    echo "La somme des coefficients x² est :  $resultat_x \n ";
    echo "La somme des coefficients x est :  $resultat_x \n ";
    echo "La somme des constantes est : $resultat\n";
    echo "La solution est : x = $reponse\n";
}
    }


//fin logique deuxieme degré

//logiaue Quitter

elseif($choix == 6){
    echo "merci d'avoir utiliser notre calcuatrice";
}

?>
