// alert("Je suis là ?");

/* 
~~~~~~~~~~~~LA CONCATENATION~~~~~~~~~~~~
*/

var annee = 2017;
var futur = 3;
var calcul = annee + futur;
console.log(calcul);
document.write(calcul + "<br>"); // -> 2020 avec saut de ligne.

var mois = "7";
var calcul2 = annee + mois;
console.log(calcul2);
document.write(calcul2 + "<br>"); // -> 2017 + "7" = 20177

var debutPhrase = "Aujourd'hui ";
var nbStagiares = 12;
var suitePhrase = " Stagiaires";
var finPhrase = " sont présent";
document.write(debutPhrase + nbStagiares + suitePhrase + " " + finPhrase);