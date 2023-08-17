<?php

if($_GET){
    echo $_GET["produit"], " à la ", $_GET["gout"], "<br>";
    echo "Vendu au prix de ", $_GET["prix"], "€, ajd seulement !", "<br>";
}