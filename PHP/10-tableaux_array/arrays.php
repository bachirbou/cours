<?php

// la var permet de stocker des val
$p="naruto,asuna,kabuto,kakashi";

echo $p . "<br>";

$m=array("naruto","asuna","kabuto","kakashi",23);

echo "<pre>";print_r($m);"<pre/>";
echo "<pre>";var_dump($m);"<pre/>";
echo "<br>";
echo $m[0];
echo "<br>";
/*autre syntax pr decla un tbl
elle est + pratique que la 1er pr add ds element au tbl au fur et a mesur de ntr cd si on ls connais ps ts au depart
*/

$lp[]="France";
$lp[]="Japon";
$lp[]="Chine";
$lp[]="URSS";
$lp[]="Sri Lanka";
$lp[]="Bengladesh";
$lp[]="Maroc";
echo "<br>";

// bcl foreach adapt aux tbl

foreach($lp as $i=>$v){
    echo "<p>",$v," a pour indince ",$i, "</p>";
}

// echo $lp[2];
echo "<br>";

echo "<ul>";
    foreach($lp as $i=>$v){
    echo "<li>",$v," a pour indince ",$i, "</li>";

    }
echo "</ul>";
echo "<br>";
echo"<p>",implode('-',$m),"</p>";//regarde l'expl
echo "<br>";


// count et sizeof

echo count($m);
echo "<br>";
echo sizeof($m);
echo "<br>";
