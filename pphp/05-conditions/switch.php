<?php 

$couleur ="bleu";
/*je decla une var en lui affectant une val
*/
switch($couleur){
    // elle debute avec une case qui test la valeur
    case "verte";
        echo "la couleur est bien vert<br>";
    break;
    // un break pour passer au case suivante si celui ci n est pas verifier
    // le breack doit etre code pour chaque case siinon mm si la case es t verif elle va allez tst le code suiv
    case "bleu";
        echo "la couleur est bien bleu<br>";
    break;
    case "rouge";
        echo "la couleur est bien rouge<br>";
    break;
    default:
        echo "la couleur est bien bonne<br>";
}

// code la mm en if/elseif

$couleur="vert";

if ($couleur == "jaune"){
    echo "la couleur est bien jaune<br>";
}elseif($couleur == "vert"){
    echo "la couleur est bien verte<br>";
}elseif($couleur == "bleu"){
    echo "la couleur est bien bleu<br>";
}