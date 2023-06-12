// alert("test");
// document.write("Hello, my name is Slim Shaddy");

// --1. ADDITION
// INFO - Je peut déclarer plusieurs variables à la suite :

// Je déclare mes variables.

var nb1, nb2, resultat;

nb1 = 10;
nb2 = 5;

// Jutilise mes variables avec un calcul

resultat = nb1 + nb2;

// J'affiche mon résultat dans la console
console.log(resultat);


// --2. SOUSTRACTION
// soustraction de nb1 - nb2 avec l'opérateur "-"

resultat = nb1 - nb2;
console.log(resultat);


// --3. MULTIPLICATION
// Multiplication de nb1 et nb2 avec l'opérateur "*"
resultat = nb1 * nb2;
console.log(resultat);


// --4. DIVISION
// Division de nb1 et nb2 avec l'opérateur "/"
resultat = nb1 / nb2;
console.log(resultat);


// --5. MODULO
// Le modulo Retourne le reste d'une division
//modulo de nb1 % nb2 avec l'opérateur "%"
resultat = nb1 % nb2;
console.log(resultat);

// Et Maintenant je ré-affecte une valeur à nb1 

nb1 = 11;
resultat = nb1 % nb2;
console.log(resultat);
console.log("Le reste de la division de " + nb1 + " par " + nb2 + " est de " + resultat);

// --6. ECriture Simplifiées
nb1 = 15;
nb1 = nb1 + 5; // égal à 20

nb1 += 10; //nb1 lui même
console.log('Le résultat de "nb1 += 10;" est ' + nb1)
// égal à 30, alternance de guillemet simples et doubles pour ne pas casser ma chaine de caractères.

// Si j'utilise un ' (apostrophe) dans une phrase concaténée, je peux échapper le caractère à l'aide d'un anti-Slash \ (alt gr + 8)