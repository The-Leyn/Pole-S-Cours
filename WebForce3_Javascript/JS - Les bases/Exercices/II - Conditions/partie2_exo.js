// [ source: https://github.com/oc-courses/intro-javascript ]
/* 
* Exo 1: * Ecrivez un programme qui fait saisir un nom de jour à l'utilisateur,
* puis affiche le nom du jour suivant.
* S'il y a des erreurs de saisie (jour incorrect), cela doit être géré !
* A toi de voir comment.
*/

// code ici


// let jour = prompt("Saisir un nom de jour").toUpperCase();

// switch (jour) {
//     case "LUNDI":
//         alert("Demain c'est Mardi")
//         break;

//     case "MARDI":
//         alert("Demain c'est Mercredi")
//         break;

//     case "MERCREDI":
//         alert("Demain c'est Jeudi")
//         break;

//     case "JEUDI":
//         alert("Demain c'est Vendredi")
//         break;

//     case "VENDREDI":
//         alert("Demain c'est Samedi")
//         break;

//     case "SAMEDI":
//         alert("Demain c'est Dimanche")
//         break;

//     case "DIMANCHE":
//         alert("Demain c'est Lundi")
//         break;

//     default:
//         alert("Jour Incorrect")
//         break;
// }

/* 
* Exo 2:
* Complétez ce programme pour afficher l'heure qu'il sera dans une seconde.
* Attention, ce programme est moins simple qu'il en a l'air : validez votre solution 
* en la testant avec les entrées suivantes. Vous devez obtenir les résultats indiqués.
    14h17m59s => 14h18m0s
    6h59m59s => 7h0m0s
    23h59m59s => 0h0m0s (minuit)
*/

let heures = 22; // Faire varier cette variable entre 0 et 23
let minutes = 59; // faire varier cette variable entre 0 et 59
let secondes = 59; // faire varier cette variable entre 0 et 59

// Ajoutez votre code ici

// if ((heures >= 0) && (heures <= 23) && (minutes >= 0) && (minutes <= 59) && (secondes >= 0) && (secondes <=59)) {

//     secondes++;
//     if (secondes === 60) {
//         secondes = 0;
//         minutes++;
//         if (minutes === 60) {
//             minutes = 0;
//             heures++;
//             if (heures === 24) {
//                 heures = 0;
//             }
//         }
//     }
// } else {
//     console.log("Erreur")
// }


//  console.log(`${heures}h${minutes}m${secondes}s`);





//---------------------------------------

// secondes++;
// if (secondes === 60) {
//     // On met les secondes à 0 et passe à la minute suivante
//     secondes = 0;
//     minutes++;
//     if (minutes === 60) {
//         // On met les minutes à 0 et passe à l'heure suivante
//         minutes = 0;
//         heures++;
//         if (heures === 24) {
//             // L'heure suivante est minuit
//             heures = 0;
//         }
//     }
// }

// console.log(`${heures}h${minutes}m${secondes}s`);










/*
* Exo 3 
*
* Ecrivez un programme qui fait saisir la note d'examen d'un étudiant. 
* => utiliser: let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));
* puis affiche si ce candidat est recalé (moyenne inférieure à 10), 
* reçu (moyenne entre 10 et 12) 
* ou reçu avec mention (moyenne supérieure ou égale à 12).
* Essayer avec méthode "if... else" 
*
* Tester le même exercice avec "switch" 
*   -> la moyenne est sur 10
*   -> si de 1 à 4: recalé
*   -> si 5: reçu
*   -> + de 5: reçu avec mention
*/


// let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));

// if (moyenne < 10) {
//     alert("Vous êtes recalé");
// } else if (moyenne < 12) {
//     alert("Vous êtes reçu");
// } else if (moyenne <= 20) {
//     alert("Bravo, vous avez une mention");
// } else {
//     alert("Erreur");
// }

// switch (moyenne) {
//     case 5:
//         alert("Vous êtes reçu")
//         break;
//     case 6:
//         alert("Vous êtes reçu")
//         break;
//     case 7:
//         alert("Vous êtes reçu")
//         break;
//     case 8:
//         alert("Vous êtes reçu")
//         break;
//     case 9:
//         alert("Vous êtes reçu")
//         break;
//     case 10:
//         alert("Vous êtes reçu")
//         break;
//     default:
//         alert("Vous êtes recalé")
//         break;
// }

