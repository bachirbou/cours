<?php

// sz funct est simil a clle d'une variable est stocke une valeur recuperable par contre cette valeur ne sera pas modifiable par la suite .

// une constan se decla avc le mot cle define
// elle prend 2 arg le nom de la const par convention en MAJ le secon et la valeur de la const  

// ex
 define('VILLE', 'Poissy');

 echo VILLE.'<br>';
//  tenter de redef sa valeur comme en dessous generera une err php 
// define('VILLE', 'paris');
//  echo VILLE.'<br>';

 ?>

<?php

// il sera utile de stocker une valeur non variable dans une constante par exemple la valeur de l'url du site. on pourra la stocker avc define ('url','..') 
// les constantes magiques sont des constantes déjà codées mise à notre disposition (il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)

// cette constante donne le chemin physique jusqu'au fichier (file)
echo __FILE__ . '<br>';
// celle-ci donne le chemin physique jusqu'au dossier
echo __DIR__ . '<br>';
// cette dernière donne la ligne où elle est codée
echo __LINE__ . '<br>';

?>