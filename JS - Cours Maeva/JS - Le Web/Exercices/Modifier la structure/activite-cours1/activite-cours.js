// ====== ACTIVITÉ COURS =====


// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.

let element1 = document.getElementById('main-content');
// ou
let element8 = document.querySelector('main-content');

// 2 - Pour ID main-content, change le contenu textuel par "Bonjour, je suis un nouveau texte"

document.getElementById('main-content').textContent = "<p>Bonjour, je suis un nouveau texte</p>";


// 3 - Récupérez le premier élément ayant pour classe important

let a = document.querySelector(".important");
// ou
let m = document.getElementsByClassName("important")[0];

// 4 - Change lui sa class par newClass, le contenu textuel devra s'afficher en rouge

let b = document.querySelector(".important")
elt.classList.replace("important", "newClass");

document.querySelector(".important").getElementsByClassName.color="red";