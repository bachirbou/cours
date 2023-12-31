<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else</title>
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
// je declare 5 variables que je vais tester

$a = 22;
$b = 33;
$c = 44;
$d = 55;
$e = 66;

// 01-if else simple
// le if va tester (ce qu'on lui propose entre les paranthèses)
// si c'est vrai (TRUE) il exécute ce qu'il y a dans le bloc d'instructions. Si c'es faux (FALSE), il execute ce qui est dans le bloc d'instructions du else

if($a < $b){
    echo "Vrai, $a est bien inférieur à $b <br>";
}else{
    echo "Faux, $a n'est pas inférieur à $b ";
}

// en php, on n'est pas obligé de coder le else.
// on peut tester qlq chose et si c'est vrai, on exécute ce qui est dans le bloc d'instructions
// mais si c'est faux, si on ne rentre pas dans ce cas de figure, on continue simplement à exécuter la suite du code

if ($b < $c){
    echo "Vrai $b est bien inférieur à $c <br> ";
}

// 02- avec && (AND)
// avec &&, les deux test doivent etre TRUE, sinon , on rentre dans le else(le FALSE)

if($a < $b && $b > $c){
    echo "Vrai, les deux affirmations sont exactes";
}else{
    echo "Faux, une des deux affirmations n'est pas vérifiée <br>";
}

// 03- avec || (OR)
// avec || (OR) une seule de deux conditions vérifiées suffisent a entrer dans le TRUE (le bloc d'instructions du if)

if($a < $b || $b > $c){
    echo "Vrai, une des deux affirmations est exacte <br>";
}else{
    echo "Faux, aucune des deux affirmations n'est verifée";
}

// 04- avec XOR (ou exclusif)
// XOR exige qu'une seule des deux affirmations soit exacte.Si les deux sont exactes ou les deux fausses,on entre dans le else

if($a < $b XOR $b > $c){
    echo "Vrai, une seule des deux affirmations est exacte <br>";
}else{
    echo "Faux, les deux affirmations sont exactes <br>";
}

// 05- avec if/elseif/else
// condition avec trois possibilités. Si la première n'est pas vérifiée, on entre dans la seconde(elseif).Si cette dernière est toujours fausse, on entre dans le else

if($a > $b){
    echo "$a est bien supérieur à $b";
}elseif($a != 22){
    echo "Vrai, $a est différent de 22";
}else{
    echo "Faux, aucune des deux affirmations n'est vraie <br>";
}

// 06-conditions contractée (appelée aussi ternaire)
// la condition contractée est utilisée quand on doit coder en PHP dans un bloc HTML
// elle permet une syntaxe plus condensée
/* if($a < $b){
    echo "Vrai $a est bien inférieur à $b"; 
}else{
    echo "Faux, $a n'est pas inférieur à $b";
}
*/

// la ternaire ci-dessous est équivalente de la condition mise en commentaire au dessus

// entre les parenthèses, on ecrit toujours ce que l'on veut tester 
// après le ? on ecrit le bloc d'instructions du if
// après les : on ecrit le bloc d'instructions du else

echo ($a < $b) ? " Vrai $a est bien inférieur à $b <br>" : "Faux";
// 07- if/else avec == et ===

$var = 100;
$var2 = "100";

// == ne teste que la valeur
if($var == $var2){
    echo "Vrai, les deux variables ont la même valeur <br>";
}else{
    echo "Faux, elles sont différentes";
}

// === teste aussi le type

if($var === $var2){
    echo "Vrai, les deux variables ont la même valeur et le même type  <br>";
}else{
    echo "Faux, elles ont la même valeur mais des types différents <br>";
}

// 08- if(isset)/else
//isset() est une fonction prédéfinie pour tester si une variable existe,à été declarée avant dans le script
// c'est trés utile pour savoir si on continue à derouler le code,à l'éxécuter ou stopper avec un message d'erreur



if(isset($test)){
    echo "La variable test existe";
}else{
    echo "La variable test n'existe pas <br>";
}

$test = TRUE;

// code de la même condition en version contractée, en ternaire (utile lorsque l'on est dans un bloc HTML)

echo(isset($test)) ? "La variable test existe <br>" : "La variable test n'existe pas ";

?>

</body>
</html>