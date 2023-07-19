// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - Les instructions
* Ecrivez un programme qui fait saisir un nombre à l'utilisateur 
* puis affiche la table de multiplication de ce nombre.
* en utilisant while
* en utilisant for
* TODO : MESSAGE: Choisissez la table entre 2 et 10
* TODO : affichage de la table de multiplication ds la console
*/

let nombre = Number (prompt("choisissez une table de multiplication entre 2 et nombre 10"));
if ((nombre >= 2) && (nombre <= 10)) {
for (let i = 1; i <= 10; i++) {
    let res = i * nombre;
    console.log(i + " x " + nombre + " = " + res);    
 }
} else{
    console.log("erreur votre chiffre est pas compris entre 2 et 10")
}


// 2eme methode

let nombre = Number (prompt("choisissez une table de multiplication entre 2 et nombre 10"));
while ((nombre >= 1) || (nombre > 10)) {
    if ((nombre >= 2) && (nombre <= 10)) {
        for (let i = 1; i <= 10; i++) {
            let res = nombre * i;
            console.log(nombre + " x " + i + " = " + res);
        }
        break;
    } else {
        nombre = Number(console.log("erreur votre chiffre n'est pas compris entre 2 et 10"))
    }
}

let nombre = prompt("choisissez une table de multiplication entre 2 et nombre 10");
while ((nombre > 1) && (nombre < 10)) {
    if ((nombre >= 2) && (nombre <= 10)) {
        for (let i = 1; i <= 10; i++) {
            let res = nombre * i;
            console.log(nombre + " x " + i + " = " + res);
        }
        break;
    } else {
        nombre = Number(console.log("erreur votre chiffre n'est pas compris entre 2 et 10"))
    }
}


// Code ici

/*
* EXERCICE 2 - Les instructions
* Ecrivez un programme qui construit progressivement un triangle de 7 lignes:

# 
## 
### 
#### 
##### 
###### 
#######

*/

// Code ici



console.log("While");
le ligne = "";
// var i = 1;

while (i <= 7) {
    ligne = ligne + "#"
    // autre possibilité avec l'opérateur +=
    // ligne+= "#";
    console.log(ligne);
    i++
}



for (i = 0; i <= 30; i++) {
    // ligne = ligne + "#";
    ligne += "#"
    // console.log(ligne);
    document.write(ligne + "<br>")
}
/* 
* EXERCICE 3: Complétez ce programme pour qu'il fasse 10 tours de manège en affichant le numéro du tour à chaque tour :

    Le manège démarre
    C'est le tour numéro 1
    C'est le tour numéro 2
    ...
    C'est le tour numéro 10
    Le manège s'arrête
*/

console.log("Le manège démarre")
for (let compteur = 1; compteur <=10; compteur++) {
    console.log("C'est le tour numéro " + compteur);
}
console.log("Le manège s'arrête")



console.log("Le manège démarre")
let compteur=1;
while ( compteur <= 10) {    
    console.log("C'est le tour numéro " + compteur);
    compteur++;
}
console.log("Le manège s'arrête")



/* 
* EXERCICE 4:
* Ecrivez un programme qui affiche tous les nombres entre 1 et 100 avec les exceptions suivantes :
    - Il affiche "Fizz" à la place du nombre si celui-ci est divisible par 3.
    - Il affiche "Buzz" à la place du nombre si celui-ci est divisible par 5 et non par 3.
    - Il affiche "FizzBuzz" à la place du nombre si celui-ci est divisible à la fois par 3 et par 5.
    - Vous pouvez utiliser l'opérateur modulo % qui renvoie le reste de la division d'un entier par un autre.

console.log(10 % 2); // 0
console.log(10 % 3); // 1
console.log(11 % 3); // 1
Cet exercice constitue un test d'embauche classique qui élimine un nombre significatif de candidats. 
Accrochez-vous pour le réussir !
*/