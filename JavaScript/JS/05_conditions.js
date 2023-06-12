// alert("HELLO WORLD");

//Structure de base IF

if(true){ //La condition à vérifier le "if" vérifie si elle est vrai

}

var nb1 = 50;
if (nb1 < 50) {
    console.log("nb1 est inférieur à 50")
}

//ELSE

if (true) {
    //~~~~code si vrai~~~~~
} else {
    //code si faux
}


if (nb1 > 50) {
    console.log("nb1 est supérieur à 50")
} else {
    console.log("nb1 est inférieur à 50")
}


// EXERCICE :

// ON utilise le if pour vérifier l'age de l'internaute:
// => Si il est majeur je lui souhaite la bienvenue
// Si il est mineur je lui signale [1] et je le renvoie vers un autre site

// 1-- Je déclare la majotité légal
var majoriteFr = 18;

// 2-- Demander l'age en s'assurant que nous avons un number
var age = parseInt(prompt("Indiquez votre age"))

// 3-- Je vérifie si mon intenaute est majeur
if (age >= majoriteFr) {
    alert("Bienveue vous êtes majeur")
} else {
    // Si l'utilisateur est mineur je lui signal
    alert("Ce site est interdit au personne mineur")
    // ensuite je le redirige
    document.location.href="https://www.google.com/"
}