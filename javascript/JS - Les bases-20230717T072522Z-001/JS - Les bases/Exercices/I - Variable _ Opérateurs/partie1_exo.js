// [ source: https://github.com/oc-courses/intro-javascript ]


// ===== Les variables ======

/* 
* Exo 1: Ecrivez un programme qui affiche votre nom, puis votre âge.
*/



/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/


/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5);
console.log("4 + 5");
console.log("4" + "5");

/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/

var a = 2;
a -= 1;
a++;
var b = 8;
b += 2;
var c = a + b * b;
var d = a * b + b;
var e = a * (b + b);
var f = a * b / a;
var g = b / a * a;
console.log(a, b, c, d, e, f, g);


/* 
* Exo 5: 
* Complétez le programme pour convertir une tempéraure des degrés Celsius en degrés Fahrenheit.

/* C'est à Daniel Gabriel Fahrenheit que l'on doit l'invention des thermomètres 
en graduation Fahrenheit. Au début, ses thermomètres sont à l'alcool (1709), 
mais il remplace rapidement l'alcool par du mercure (1715), permettant à ses 
outils de mesure de fournir des données comparables. En 1742, un autre 
scientifique, Anders Celsius, propose une nouvelle graduation au thermomètre. 
La conversion entre les échelles est donnée par [°F] = [°C] x 9/5 + 32. 
*/

var tempCel = 37.1;

// Ajoutez ici le code pour convertir tempCel en degrés Fahrenheit


/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

var nombre1 = 5;
var nombre2 = 3;

// Tapez votre code ici (sans rien modifier d'autre !)

console.log(nombre1); // Doit afficher 3
console.log(nombre2); // Doit afficher 5

/*
                    correction des exercie precedent

var a = 2;

a = a - 1;

console.log(a);   


a++;

console.log(a);   
 


    var b = 8;

console.log(b);   

    b += 2;

console.log(b);       


    var c = a + b * b;

console.log(c);       

    var d = a * b + b;

console.log(d);       

    var e = a * (b + b);

    var f = a * b / a;

    var g = b / a * a;

console.log(e);       
console.log(f);       
console.log(g);     
console.log(a);       
console.log(e);       


let prenom = "bachir" ;
let age = 23 +' ans';
console.log(prenom);
console.log(age);

let name = prompt("Entrez votre prénom");
let age = prompt("Entrez votre âge");
console.log("Donc ton nom est " + name + " et ton âge est de " + age + "ans");
alert("Donc ton prenom est " + name + " et ton âge est de " + age + "ans");
alert("Merci pour toutes ses information");

var a = 9;
a += 3;
console.log(a);

a = 9*3;
console.log(a);

a = 9-3;
console.log(a);

a=9/3;
console.log(a);

console.log(4 + 5);

console.log("4 + 5");

console.log("4" + "5");

var a = 2;
a -= 1;
a++;
var b = 8;
b += 2;
var c = a + b * b;
var d = a * b + b;
var e = a * (b + b);
var f = a * b / a;
var g = b / a * a;
console.log(a, b, c, d, e, f, g);

var tempCel = 37.1;
var f = tempCel * 9/5 + 32;
console.log(tempCel + "°C" = f ="F°");

var nombre1 = 5;
var nombre2 = 3;
var b = nombre1
nombre1 = nombre2;
nombre2 = b;
console.log(nombre1);
console.log(nombre2);



var nombre3 = 5;
var nombre4 = 3;

nombre3-=2;
nombre4+=2;

console.log(nombre3);
console.log(nombre4); 
let temps = nb1
nb1 = nb2
nb2 = temps


*/
