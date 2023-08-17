<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefinies</title>
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

/*les fnction predefinit sont celle qui sont deja codee mise a notre dispo par php (exp; isset())

01- strlen() et iconv_strlen()
les 2 pemettent de tst la longueur d1 chaine de cara (expl on entre pas 200 cara pour un pseudo on va limit a 20)
*/

$p= "Lorem, ipsum dolorsit amet consectetur adipisicing elit. Molestiae, tempore.";

echo iconv_strlen($p) . "<br>";//iconv_strlen() compte seulemnt les car afich

echo strlen($p) . "<br>";//strlen() utili les nb d'octet utili par chqe cara


$pp="été";

echo iconv_strlen($pp) . "<br>";//iconv_strlen() compte seulemnt les car afich

echo strlen($pp) . "<br>";//strlen() utili les nb d'octet utili par chqe cara

/* 02- substring
fonction predefinit qui permet de selec une chaine de cara a des endroit precis et supp le rest 
elle prend 3 par .la chaine a decoup, le point de dep et celui d arriv 
je veut cons la 1er moitier de ma chaine de cara  */ 

$po='Cest la danse des canards
Qui en sortant de la mare
Se secouent le bas des reins
Et font coin-coin';
echo substr($po,0,16)."<br>";
echo substr($po,3,14)."<br>";
echo substr($po,3,-4)."<br>";//il prendra pas les '-4' de la fin 
echo substr($po,-9,2)."<br>";//il commence par la fin '-9' donc a 'c'

/* 03-date
celle ci permet de recup l'annee auto */

echo date ("d/m/Y")."<br>";

echo "&copy;". date(' Y ' )."bac". "<br>";

echo date ("D-M-Y")."<br>";

// 04-empty, contrairement a isset la fonct verif si la var qui existe cont une val

$pa=" ";

if (empty($pa)){
    echo"la var n'a pas de contenu <br>";
}else{
    echo "la var  a recu du ctn<br>";
}
?>

</body>
</html>