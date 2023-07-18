// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - Les instructions
* Ecrivez un programme qui fait saisir un nombre à l'utilisateur 
* puis affiche la table de multiplication de ce nombre.
* en utilisant while
* en utilisant for
* TODO : MESSAGE: Choisissez la table entre 2 et 10
* TODO : affichage de la table de multiplication ds la console
*/

/*
je crée une variable "table" qui contient un prompt qui demande de choisir une table entre 2 et 10
pour faire les multiplication d'une table, on fait table x nombre (1,2,3...10) = resutat

*/

let table = Number(prompt("Choisr une table entre 2 et 10"));
// For
if ((table >= 2) && (table <=10)) {
    for (let i = 2; i <= 10; i++) {
        let result = table * i;
        console.log(`${table} x ${i} = ${result}`);
    }
    
    // While
    let compteur = 2;
    while (compteur <= 10) {
        let result = table * compteur;
        console.log(`${table} x ${compteur} = ${result}`);
        compteur++;
    }
    
} else {
    console.log("Erreur");
}



// Code ici

/*
* EXERCICE 2 - Les instructions
* Ecrivez un programme qui construit progressivement un triangle de 7 lignes:

# 
## 
### 
#### 
##### 
###### 
#######

*/

// Code ici
let dieze = "";
for (let ligne = 0; ligne < 7; ligne++) {
    dieze += "#";
    console.log(dieze);
}






/* 
* EXERCICE 3: Complétez ce programme pour qu'il fasse 10 tours de manège en affichant le numéro du tour à chaque tour :

    Le manège démarre
    C'est le tour numéro 1
    C'est le tour numéro 2
    ...
    C'est le tour numéro 10
    Le manège s'arrête
*/


console.log("Le manège démarre");
for (let i = 1; i < 11; i++) {
    console.log(`C'est le tour numéro ${i}`);
}
console.log("Le manège s'arrête");


/* 
* EXERCICE 4:
* Ecrivez un programme qui affiche tous les nombres entre 1 et 100 avec les exceptions suivantes :
    - Il affiche "Fizz" à la place du nombre si celui-ci est divisible par 3.
    - Il affiche "Buzz" à la place du nombre si celui-ci est divisible par 5 et non par 3.
    - Il affiche "FizzBuzz" à la place du nombre si celui-ci est divisible à la fois par 3 et par 5.
    - Vous pouvez utiliser l'opérateur modulo % qui renvoie le reste de la division d'un entier par un autre.

console.log(10 % 2); // 0
console.log(10 % 3); // 1
console.log(11 % 3); // 1
Cet exercice constitue un test d'embauche classique qui élimine un nombre significatif de candidats. 
Accrochez-vous pour le réussir !
*/

for (let i = 0; i < 100; i++) {
    if ((i % 3 === 0) && (i % 5 === 0))  {
        console.log("FizzBuzz")
    } else if (i % 5 === 0)  {
        console.log("Buzz")
    } else if (i % 3 === 0) {
        console.log("Fizz");
    } else {
        console.log(i);
    }
}
