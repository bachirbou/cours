// alert("tt");


var disMoi = "";
var i = 1;

while ((disMoi !== "oui") && (disMoi !== "non")) {
  disMoi = prompt("Allez!!! On joue à ni oui ni non?");
  document.write('"' + disMoi + "\" n'est pas une réponse, pour la " + i + "° fois, veux-tu jouer oui ou non? <br>");
  // document.write(`" ${disMoi} " n'est pas une réponse, pour la ${i} ° fois, veux tu jouer oui ou non ? <br>`);
  i++;
}

document.write("<h2 style='background-color:cyan; text-align:center; font-size:10rem;'> PERDU ;-) ! Tu as tenu " + i + " tours. </h2>")
