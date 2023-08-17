<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
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
    <div class="dropdown">
        <button class="dropbtn">Fonctions
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../07-porté_des_variables/">Global et Local</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Fonctions
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../08-boucles/">Boucles</a>
        </div>
    </div>
  
</div>
   

<?php

// 01-boucle while

// j'inititalise ma var $i en lui affectant la val 0
// svt in initialise a 0 car le 1er indice de mon tblx est 0
$i=0;

/* ds la paranthes on donne la cdt pr que la bcl puisse fnctn (tt que la val ne depa 10)
    while ($i <= 10){
        tant que la cdt est respectee, on execute ce qui est dans se blc d'instruc (affich apre echo)
            echo 'tr de bcl' .$i."---".'<br>;
            incrementation de $i
            $i++;
    }
*/
while ($i <= 20){
    if($i == 10){
        echo "tour de bcle " . $i . '<br>';
    }else{
        echo "tour de bcle " . $i . "---" . '<br>';
    }
    $i++;
}


// 02- do while() pas tres utilisee, psque jms 

$i=0;

do{
    echo'tr de bcle'.$i."***"."<br>";
    $i+=2;
}while($i <=10);


// 03-boucle for()
    echo '<br>';

for ($i=0;$i<=10;$i++){
    echo "ligne ".$i.'<br>';
}

// 03 bis utilisation d'une for pour creer un selecteur
echo'<br>';

echo '<form>';
    echo"<select>";
        echo"<option selected>Selectionnez l'année</option>";
        for($y=date('Y'); $y>=date('Y')-100;$y--){
            echo "<option> .$y. </option>";
        }
    echo"</select>";
echo "</form>";

// 04-dbl fro imbriquee
echo '<br>';

echo "<table border ='1' style='border-collapse:collapse'>";
        echo"<tr>";
            for($p=1;$p<=10;$p++){
                echo"<td>$p</td>";
            }
        echo"</tr>";
echo"</table>";
echo '<br>';


echo "<table border ='1' style='border-collapse:collapse'>";
            for($l=0;$l<=9;$l++){
                 echo"<tr>";
                 for($cellule=0; $cellule<=9; $cellule++){
                    echo "<td>" .(10*$l+$cellule) +1,"</td>";
                 }
        echo"</tr>";
            }
// echo"</table>";
// echo '<br>';

                   

?>

</body>
</html>