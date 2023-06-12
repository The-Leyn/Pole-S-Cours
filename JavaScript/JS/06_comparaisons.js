// alert("test");

// L'opérateur de comparaison == signifie "égal à"
var nb1 = 123;
var nb2 = "123";
console.log(nb1 == nb2); // return true

// L'opérateur de comparaison === signifie srictement "égal à" il permet de vérifier la valeur et le type.

console.log(nb1 === nb2); //return false

// L'opéraeur != signifie "différent de ... en VALEUR"

console.log(nb1 != nb2); //return false

// L'opérateur !== signifie "strictement différent de ... en type et valeur"

console.log(nb1 !== nb2); //return true

// EXERCICE 

// J'arrive sur un espace sécurisé au moyen du prenom et de l'age.
// Je dois choisir mon prénom et mon age pour être authentifié sur le site.
// En cas d'echec  une alert m'informe du problème.
// si tous ce passe bien; un message de bienvenue m'accueille.

var prenom = "Adrien";
var age = 22;

// Demander son prenom à l'utilisateur avec un prompt
var prenomLogin = prompt("Qu'elle est votre prénom ?");

// Je vérifie si le prenom saisie

if (prenomLogin === prenom) {    // Si le prénom saisi (prenomLogin) correspond à (prenom).
    var ageLogin = parseInt(prompt("Qu'elle est votre âge ?"));
    if (ageLogin === age) { // si l'age saisi (ageLogin) correspond à (age) alors j'envoie une alerte.
        alert("Bienvenue " + prenom);
    } else { // si l'age ne correspond pas alors alerte erreur.
        alert("Erreur d'age");
    }
} else { // Si le prenom saisi (prenomLogin)ne correspond pas à (prenom).
    alert("Acces refuser, vous n'êtes pas un utilisateur connu");
}