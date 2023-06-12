// LES BOUCLES 

// La BOUCLE FOR
/* for (3 arguments) {
    ....CODE....
    }
*/

for (var i = 1; i <= 10; i++) {
    document.write("<p> Instruction Exécutée : " + i + "</p>")
}

// LA BOUCLE WHILE
// Très utiliser quand on ne connait pas le nombre de c
var j = 1;

while  (j <=20) {
    document.write("<hr><p> Instruction Exécutée : " + j + "</p>")
    j++
}

// EXERCICE : 

// J'ai 1000€ sur mon compte chaque jour
// chaque moi sj'ajoute 50€

var monCompte = 1000;
var temps = 0;
while ( monCompte < 2000) {
    monCompte += 50;
    temps++;
}
document.write("<h3>Solde du compte : " + monCompte + "€ </h3>");
document.write("<h3>Jusqu'à 2000€, il me faut : " + temps + " Mois</h3>");

// Avec boucles FOR

var tps = 0;
for(var mesSous = 1000; mesSous < 2000; mesSous += 50){
    document.write("<h3>Le mois suivants j'ai : "+ mesSous+" </h3>")
    tps++;
}
document.write("<h3>Il aura fallu " +tps+" mois. </h3>")