// alert("tt")


var jour = prompt(`Quelle jour somme nous ?`);
var lundi = "lundi"

if (jour === "lundi") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons MARDI </h1>`
  );
} else if (jour === "mardi") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons MERCREDI </h1>`
  );
} else if (jour === "mercredi") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons JEUDI </h1>`
  );
} else if (jour === "jeudi") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons VENDREDI </h1>`
  );
} else if (jour === "vendredi") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons SAMEDI </h1>`
  );
} else if (jour === "samedi") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons DIMANCHE </h1>`
  );
} else if (jour === "dimanche") {
  document.write(
    `<h1>Aujourd'hui nous somme ${jour} donc demain nous serons LUNDI </h1>`
  );
} else {
  document.write(
    `<h1>${jour} ne semble pas correspondre a un jour</h1>`
  );
}



switch(jour){
    
    case "lundi":
        console.log(`Demain on est mardi`);
    break;
    case "mardi":
        console.log(`Demain on est mercredi`);
    break;
    case "mercredi":
        console.log(`Demain on est jeudi`);
    break;
    case "jeudi":
        console.log(`Demain on est vendredi`);
    break;
    case "vendredi":
        console.log(`Demain on est samedi`);
    break;
    case "samedi":
        console.log(`Demain on est dimanche`);
    break;
    case "dimanche":
        console.log(`Demain on est lundi`);
    break;
    default:
        console.log(`Désolé, vérifiez l'orthographe et veuiller écrire sans majucules.`);
}