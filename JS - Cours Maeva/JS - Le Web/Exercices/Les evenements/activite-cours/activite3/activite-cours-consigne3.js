
// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Ecouter un évènement
   
    La méthode addEventListener() appelée par un élément écoute un événement sur cet élément. Lorsque cet événement est détecté, la méthode appelle une fonction callback que vous devez lui passer en argument. C'est dans cette fonction que vous placez votre code.

2 - La propagation des évènements
    
    Lorsqu'un évènement se déclenche, celui-ci va en fait naviguer à travers le DOM et passer à travers les différents gestionnaires d'évènement disposés dans le document. On dit également que l'évènement se « propage » dans le DOM.

3 - Comment stopper la propagation des évènement

    Pour stopper la propagation d'un évènement, on va pouvoir utiliser la méthode stopPropagation() de l'interface Event . Cette méthode va stopper la propagation d'un évènement après qu'un gestionnaire d'évènement (gérant l'évènement en question) ait été atteint.

4 - Modifier le comportement par défaut d'un élément

    La méthode preventDefault(), rattachée à l'interface Event, indique à l'agent utilisateur que si l'évènement n'est pas explicitement géré, l'action par défaut ne devrait pas être exécutée comme elle l'est normalement.

    L'évènement continue sa propagation habituelle à moins qu'un des gestionnaires d'évènement invoque stopPropagation() ou stopImmediatePropagation() pour interrompre la propagation.

    Comme indiqué ci-après, appeler preventDefault() n'aura aucun effet pour un évènement qui ne peut être annulé (comme ceux émis par EventTarget.dispatchEvent() sans avoir indiqué cancelable: true).

    Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours3.html


/* 
Partie 1
Commençez par écouter les événements click depuis l'élément #parent. 
Puis affichez le nombre de clics dans l'élément #parent-count.
*/

const papa = document.getElementById("parent");
let cpp = 0;
papa.addEventListener("click", function () {
    cpp++;
    let pp = document.getElementById("parent-count");
    pp.textContent = cpp;

})

/* 
Partie 2
Faite la même chose mais avec l'élément #child. 
Il faudra afficher le nombre de clics sur cet élément dans l'élément #child-count.
*/

const enf = document.getElementById("child");
let cpf = 0;
enf.addEventListener("click", function() {
    cpf++;
    let pipi = document.getElementById("child-count");
    pipi.textContent = cpf;


})

/*
Partie 3
Nous souhaitons maintenant que lorsque nous cliquons sur l'élément #child, seul le compteur de l'enfant se mette à jour.
N'oubliez pas que l'élément enfant se trouve à l'intérieur de l'élément parent
*/



const enf = document.getElementById("child");
let cpf = 0;
enf.addEventListener("click", function (caca) {
    cpf++;
    let pipi = document.getElementById("child-count");
    pipi.textContent = cpf;
    caca.stopPropagation();


})



/*
Partie 4
On veut éviter qu'un clic sur le lien ne nous fasse changer de page. 
Supprimons donc ce comportement par défaut. 
*/

const papa = document.getElementById("parent");
let cpp = 0;
papa.addEventListener("click", function () {
    cpp++;
    let pp = document.getElementById("parent-count");
    pp.textContent = cpp;

});

const enf = document.getElementById("child");
let cpf = 0;
enf.addEventListener("click", function (caca) {
    cpf++;
    let pipi = document.getElementById("child-count");
    pipi.textContent = cpf;
    caca.stopPropagation();
    caca.preventDefault();
});


