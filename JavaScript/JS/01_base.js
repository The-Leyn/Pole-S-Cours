// Comentaire sur une ligne

/* Ici je fais un commentaire sur plusieur lignes*/


// 1-- Déclarer une variable en JS :

// var Prenom;


// 2-- Afecter une valeur à une variable :

// var prenom = "Adrien";

// 3-- Une instruction se termine toujours par un point-virgule, aussi il est possible d'écrire plusieurs instruction sur plusieurs sur un eseul ligne.
// instr_1;
// instr_2; instr_3;


// 4-- Afficher un boite de dialogue :

// alert("Super, tu es arrivé sur mon site !");

// ou

// window.alert("Super, tu es arrivé sur mon site !")


// 5-- Afficher dans la console (ici, la valeur de ma variable Prénom) :

// console.log(prenom)


// 6-- Afficher dans la page web :

// document.write("A la pause bachir il dort");


// 7-- Demander à l'utilisateur une valeur (2 Façons) : 

// window.prompt("On est qu'elle jour ?, jour de la semaine");

// ou

// prompt("On est qu'elle jour ?, jour de la semaine");

// Et pour manpuler cette valeur, je n'oublie pas de la stocker.

// var jour = prompt("On est qu'elle jour ?, jour de la semaine");
// console.log(jour);


// 8-- ATTENTION /!\ LE JAVASCRIPT EST SENSIBLE à LA CASE ("Case sensitive")

// mavariable =/= maVariable =/= ma_variable
//                camelCase      snake_case

// 9-- Une variable ne peut pas commencer par un chiffre, ne doit contenir que des caractères alphanumériques, et ne peut pas être un mot réservé (var, for ... des éléments natif su langages JavaScript).


// 10-- Une variable peut être déclarer de façon explicite

// Façon explicite :
// var fruit;
// fruit = "Fraise";

// Façon implicite : 
// var fruit_2 = "Poire";

/*
~~~~~~~~~~~~~~ LES TYPES DE VARIABLES ~~~~~~~~~~~~~~
*/

// 1-- Chaine de caractères (string)

// var vacances = "2020";
// var destination = "Australie";
// console.log(vacances)


// 2-- Un nombre entier (integer ou int)

var annee = 2023;
// console.log(destination);


// 3-- Un nombre décimal (float)

// var nombre_a_virgule = -5.32;;
// console.log(nombre_a_virgule);

var vacances = "2020";
// console.log(vacances);


// 4-- Un Booléen (Boolean = VRAI/FAUX = TRUE/FALSE)

// var unBoleen = false;

// 5-- Les constantes 

/*
    La déclaration const permet de déclarer un constante accesible uniquement en lecture.
    Contrairement à une variable sa valeur ne peut plus être modifiée par réafectation plus bas dans le code.
    Une constante ne peut pas être déclarer à nouveau dans le même script.
*/

// Par convention les constantes sont en majuscule 

const PAYS = "France"; //String
const AN = "2020"; // Sring
const BIRTH = 2020; //nombre / int / integer


// 6-- Le typeof permet de connaitre le type de ma variable.

console.log(vacances);
console.log(typeof vacances);
console.log(typeof annee);

// En JS les variables sont auto-typées
// On peut convertir une variables de type NUMBER en STRING et ausssi STRING en NUMBER avec les fonctions native de JavaScript.
// La fonction parseInt() renvoie un entier à partir d'une chaine de caractères.

var unChiffre = "12";
console.log(unChiffre);
console.log(typeof unChiffre);

// STRING => NUMBER

unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// Je réafecte une valeur 
unChiffre = "12.22";
console.log(unChiffre);
console.log(typeof unChiffre);

// STRING => FLOAT

unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// NUMBER => STRING

var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);