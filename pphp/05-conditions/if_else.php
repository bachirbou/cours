<?php
// je declare  var que je vais tsster

$a=22;
$b=33;
$c=44;
$d=55;
$e=66;

// 01-if else simple
// le if va test ce qu on lui propose entre ls ()
// si c ets vrais il execute se qu il ya dans le block d instruction 'true' si c est faut 'false il execute se qui est dans le block d instruction du else

if  ($a<$b){
    echo"vrais $a est bien inferieur a $b <br>";
}else{
    echo "faux $a n'est pas inferieru a $b";
}

// en php on est pas obliger de coder le else 
// on peut tst qlqchose est si c est vrais on execute se qui est dans l block d instruction
//  mais si c faux, si on ne renttere pas ds se cas de figure on continue simplement a executer la suite du code 

if  ($b>$c){
    echo"vrais, $b est bien inferieur a $c <br>";
}

// 02- avec && 'and'
// avc 'and' ls 2 tst doiventy etre (true) sinon on rentre dans le else le (false) 

if  ($a<$b&&$b>$c){
    echo"vrais, les 2 affirmation sont exacte";
}else{
    echo "faux,une des 2 affirmation n'est pas verifiee <br> ";
}

// 03- || (or)
// avc  || 'or' une seul des 2 condiotn verifier suffisant a entrer dans le (true) (le bloc d insttruction du if)

if  ($a<$b||$b>$c){
    echo"vrais, 1 ds 2 affirmation est exacte<br>";
}else{
    echo "faux,aucun des 2 affirmation n'est  verifiee <br> ";
}

// 04 avc XOR (ou exclusif)
// xor exige qu une seul ds 2 affirmation soit exacte. si ls 2 st exacte ou ls 2 false on entre dans le else

if  ($a<$b XOR $b>$c){
    echo"vrais, 1 ds 2 affirmation est exacte<br>";
}else{
    echo "faux,aucun des 2 affirmation n'est  verifiee <br> ";
}

// 05 avc if /elseif /else
// cndtion avc 3 pssib, si la 1 n est ps verif on entre dans 2nde (else if) . si cette derniere est tjr fausse on entre dans le (else)

if ($a>$b){
    echo"$a est + grd que $b<br>";
}elseif($a!=22){
    echo"vrais $a est different de 22<br>";
}else{
    echo"faux aucune des 2 affirmarion n'est vrais<br>";
}

// 06 cndtion contractee appelee aussi "ternaire"
// la conditon contracter est utiliser qd on dt code en php dans une block htmk elle permet une syntax = condensee
/* if ($a<$b){
    echo"$a est + ptit que $b";
}else{
    echo"fx $a est + grd que $b";
}

la ternaire ci dessous est equivalente de la cndtion mise en comm au dessus 

entre les paranthese on ecrit tjr ce qu el on veut tstser 
apres le ? on ecrit le bloc d instruction du if 
apres ls 2 poin on ecrit le block d instrucito 

*/

echo ($a<$b)?"vrais $a est bien inf a $b <br>":"faux";

// 07 if/else avc == et ===

$var= 100;
$var2="100";

if ($var == $var2){
    echo "vr ls 2 var ont la mm valeur <br>";
}else{
    echo "fx ls 2 var sont diff<br>";
}
// === test aussi le type 

if ($var === $var2){
    echo "vr ls 2 var ont la mm valeur <br>";
}else{
    echo "fx ls 2 var ont la mm valeur mais pas le mm type<br>";
}

/*08 if (isset)/else 
isset()est une fnct predefinit pr tst si une var existe, a ete decla av le script
c tres utile pour savoir si on continue a derouler le code, a l executer ou le stopper avec une message d erreur 
*/

if(isset($tst)){
    echo "la var tst existe<br>";
}else {
    echo "la var tst n'esxiste pas<br>";
}

// ||

if(isset($a)){
    echo "la var a existe<br>";
}else {
    echo "la var a n'esxiste pas<br>";
}

$tst="po";
// lr code de la mm cdtion en versionn contratcetr en ternaire (utile l orsque on est ds le mm block)
echo (isset($tst))?"vrais  est bien existante  <br>":"inconnue";
