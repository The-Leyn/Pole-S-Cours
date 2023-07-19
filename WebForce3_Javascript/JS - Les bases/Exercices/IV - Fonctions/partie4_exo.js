// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - les fonctions
* Compléter le code suivant:
* Celui-ci doit renvoyer un message de bienvenue
*/

// TODO : faire saisir le prénom et le nom de l'utilisateur
// TODO : appeler direBonjour() avec les bons arguments et afficher son résultat

function direBonjour(prenom, nom) {
    let message = "Bonjour, " + prenom + " " + nom + " !";
    return message;
}
let prenom = prompt("Votre Prénom");
let nom = prompt("Votre nom");

let msg = direBonjour(prenom, nom);
console.log(msg)
/*
* EXERCICE 2 - les fonctions
* Completer le code suivant
* Celui-ci doit renvoyer le carré d'un nombre
*/

function carre(x) {
    // TODO : compléter le code de la fonction
    let operation = x * x;
    return operation;
}

console.log(carre(0)); // Doit afficher 0
console.log(carre(2)); // Doit afficher 4
console.log(carre(5)); // Doit afficher 25




/* 
* EXERCICE 3 - les fonctions
* En supposant que la fonction JavaScript Math.min() n'existe pas, 
* complétez le programme pour que la fonction min() renvoie le plus petit des 
* deux nombres passés en paramètres.
*/

function min(nb1, nb2) {
    if (nb1 > nb2) {
        return nb2;
    } else if (nb1 < nb2) {
        return nb1;
    } else {
        return "Egal";
        // ou return nb1;
    }
}
// Ajoutez votre code ici

console.log(min(4.5, 5)); // 4.5
console.log(min(19, 9));  // 9
console.log(min(1, 1));   // 1

/* 
* EXERCICE 4 - les fonctions
* Complétez le programme pour que la fonction calculer() gère les 4 opérations 
* mathématiques de base : addition, soustraction, multiplication et division.
*/

function calculer(nb1, operateur, nb2) {
    // if (operateur === "+") {
    //     let result = nb1 + nb2;
    //     return result;
    // } else if (operateur === "-") {
    //     let result = nb1 - nb2;
    //     return result;
    // } else if (operateur === "*") {
    //     let result = nb1 * nb2;
    //     return result;
    // } else if (operateur === "/") {
    //     let result = nb1 / nb2;
    //     return result;
    // } else {
    //     return "Erreur de saisi";
    // }
    let result
    switch (operateur) {
        case "+":
            result = nb1 + nb2;
            break;
        case "-":
            result = nb1 - nb2;
            break;
        case "*":
            result = nb1 * nb2;
            break;
        case "/":
            result = nb1 / nb2;
            break;
        default:
            result = "Erreur";
            break;
    }
    return result;
}

// Ajoutez votre code ici

console.log(calculer(4, "+", 6));  // 10
console.log(calculer(4, "-", 6));  // -2
console.log(calculer(2, "*", 0));  // 0
console.log(calculer(12, "/", 0)); // Infinity

