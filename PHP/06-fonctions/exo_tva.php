<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO TVA</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
<div class="navbar">
    <div class="dropdown">
        <button class="dropbtn">Affichage
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../01-affichage/instructions.php">instructions</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Variables et constantes
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../02-variables et constantes/variables.php">Variables</a>
            <a href="../02-variables et constantes/constantes.php">Constantes</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Concatenation et syntaxe
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../03-concatenation_et_syntaxe/concatenation.php">Concatenation</a>
            <a href="../03-concatenation_et_syntaxe/syntaxes_quotes.php">Syntaxe quotes</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Opérateurs arithmetique
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../04-opérateur_arithemetique/arithmetique.php">Arithmetique</a>
            <a href="../04-opérateur_arithemetique/operateurs_affectation.php">Operateurs par affectation</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Conditions
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../05-conditions/if_else.php">IF ELSE</a>
            <a href="../05-conditions/switch.php">SWITCH</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Fonctions
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../06-fonctions/predefinies.php">Predefinies</a>
            <a href="../06-fonctions/utilisateur.php">Utilisateur</a>
            <a href="../06-fonctions/exo_tva.php">EXO TVA</a>
        </div>
    </div>
  
</div>
   

<?php

// exo avec une efonct qui va calc le tva pr un px hr tx

// fonction qui attend

// clc qui n attend pas le para
function cl(){
    // return permet de cons en memoir un rslt recup ensuite ds ntr cde
    return 100*1.2 .' € TTC';
}

echo cl() . '<br>';


/* etape 1
elle devra recevoir le prix en arg, pui slle calculera le prix ttc
    ojectif: La fct est capable de clc pr px ttc de n'importe quelle chfr et ps jst 100  */

function clc($p){
    return $p *1.2.' € TTC';
}

echo clc(5). '<br>';

/* etape 2
la fct dt a prst clc in px ttc en fct de 2 arg qu on dt lui donne. le px ht, le tx de tva appliquer */


function tva($p,$t){
    return $p * $t .' € TTC';
}

echo tva(5,1.055). '<br>';

echo tva(5,1.2),'<br>';

// cte fct prends tjr 2 arg, sf que celui concernant le tx de tva va recevoir par defaut (tx=1.2)

function clcul($p,$t=1.2){
    // elle * le px pr le tx
    return $p * $t .'€ TTC';
}

// au moment de l"execution si je ne donne ps d'arg (100)alors ma functi va lui aplliquer le taux par def qui est de 1.2
echo clcul(100),'<br>';
// je peut change la valeur de $t
echo clcul(100,1.5),'<br>';

?>

</body>
</html>