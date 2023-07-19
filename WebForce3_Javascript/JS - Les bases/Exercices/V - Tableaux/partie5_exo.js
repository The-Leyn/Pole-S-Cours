// [ source: https://github.com/oc-courses/intro-javascript ]


/*
* EXERCICE 1 - les tableaux
* Complétez le programme pour calculer puis afficher la somme des valeurs du tableau nombres.
*/

let nombres = [11, 3, 7, 2, 9, 10];
let total = 0;
nombres.forEach(function (tableau) {
    total += tableau;
});
console.log(total);

/*
* EXERCICE 2 - les tableaux
* Complétez le programme pour qu'il calcule et affiche ensuite la plus grande valeur présente dans le tableau.
*/
// Plus grand

let valeurs = [3, 11, 7, 2, 9, 10];
let grand = 0;
valeurs.forEach(function (tableau) {
    if (grand < tableau) {
        grand = tableau;
    }
});
console.log(grand);

// Plus petit

// let valeurs = [3, 11, 7, 2, 9, 10];
// let grand = valeurs[0];
// valeurs.forEach(function (tableau) {
//     if ( grand > tableau) {
//          grand = tableau;
//     }
// });
// console.log(grand);

/*
* EXERCICE 3 - les tableaux
* Ecrivez un programme qui crée un tableau contenant les noms des trois mousquetaires, Athos, Porthos et Aramis ;
* 1- Affiche le nom de chaque mousquetaire à l'aide d'une boucle for ;
* 2- Ajoute au tableau le mousquetaire d'Artagnan ;
* 3- Affiche de nouveau le nom de chaque mousquetaire, cette fois à l'aide de la méthode forEach().
*/

// code 
let mousquetaires = ['Athos', 'Porthos', 'Aramis'];

for (let i = 0; i < mousquetaires.length; i++) {
    console.log(mousquetaires[i]);
}
mousquetaires.push("d'Artagnan");

mousquetaires.forEach(function (tableau) {
    console.log(tableau);
})


/*
* EXERCICE 4 - les tableaux
* Ecrivez un programme qui fait saisir à l'utilisateur des mots jusqu'à ce qu'il saisisse "stop".
* Le programme affiche alors la liste des mots saisis.
*/

// code 
let tableau = [];
let mots = prompt("Entrer des mots");

while (mots !== "stop") {
    tableau.push(mots);
    mots = prompt("Entrer des mots");
}
tableau.forEach(function (liste){
    console.log(liste);
})