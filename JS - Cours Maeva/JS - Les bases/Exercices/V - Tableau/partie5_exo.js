// [ source: https://github.com/oc-courses/intro-javascript ]


/*
* EXERCICE 1 - les tableaux
* Complétez le programme pour calculer puis afficher la somme des valeurs du tableau nombres.
*/

let nombres = [11, 3, 7, 2, 9, 10];

let sequence = [11, 3, 7, 2, 9, 10];
let somme = 0;
for (let i = 0; i < sequence.length; i++) {
    somme += sequence[i];
}
console.log(somme);

/*
* EXERCICE 2 - les tableaux
* Complétez le programme pour qu'il calcule et affiche ensuite la plus grande valeur présente dans le tableau.
*/

let nombres = [11, 3, 7, 2, 9, 10];
let s = nombres[0];
for (let i = 0; i < nombres.length; i++) {
    if (nombres[i] > s) {
        s = nombres[i];
    }
}


console.log(s); 



/*
* EXERCICE 3 - les tableaux
* Ecrivez un programme qui crée un tableau contenant les noms des trois mousquetaires, Athos, Porthos et Aramis ;
* 1- Affiche le nom de chaque mousquetaire à l'aide d'une boucle for ;
* 2- Ajoute au tableau le mousquetaire d'Artagnan ;
* 3- Affiche de nouveau le nom de chaque mousquetaire, cette fois à l'aide de la méthode forEach().
*/

// code 

let mousq = ["Athos", "Porthos", "Aramis"]
mousq.splice(4, 0, "d'Artagnan")
for (let i = 0; i < mousq.length; i++) {
    console.log(mousq[i]);
};


let mousq = ["Athos", "Porthos", "Aramis"]
mousq.splice(4, 0, "d'Artagnan")
mousq.forEach(function (mouss) {
    console.log(mouss);
});

/*
* EXERCICE 4 - les tableaux
* Ecrivez un programme qui fait saisir à l'utilisateur des mots jusqu'à ce qu'il saisisse "stop".
* Le programme affiche alors la liste des mots saisis.
*/

// code 




