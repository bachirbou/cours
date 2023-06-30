'use strinct'// mode strict du JavaScript

//Déclaration d'une variable
var nombre;


// La boucle "do while" s'éxecute toujours au moins une fois, alors que la boucle "while" peut ne pas s'éxecuter si la condition est fausse dès le départ

// On utilise cette boucle quand elle doit s'executer au moins une fois pour que la comparer puisse s'effectuer.

do{
    nombre = parseFloat(window.prompt('Veuillez saisir un nombre :'))
}while(isNaN(nombre) == true);

document.write(`<p>Merci, vous avez saisi <strong> ${nombre}</strong></p>`)