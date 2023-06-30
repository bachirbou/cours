// alert("tt")

var nb1 = parseInt(prompt(`nombre 1`));
var nb2 = parseInt(prompt(`nombre 2`));


if((!isNaN(nb1)) && (!isNaN(nb2))){
    // en JS NaN est l'abréviation de "Not a Number"
    //isNaN() la méthode renvoie "true" si une valeur est NaN

    if (nb1 < nb2) {
    document.write(
    `Votre 1er nombre : ${nb1} est plus petit que votre 2eme nombre : ${nb2}`)
    }else if (nb1 > nb2) {
    document.write(
    `Votre 1er nombre: ${nb1} est plus petit que le 2eme nombre: ${nb2}`)
    }else{
        document.write(`Votre 1er nombre : ${nb1} est égal a votre 2eme nombre ${nb2}`)
    }


}else{
    alert(`Vous n'avez pas saisi de chiffre(s)`)
    //ne rentre jamais dans cette condition car forcément un nombre avec le parseInt
}