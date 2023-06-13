// Crée un tableau

// var arr = new Array(element0, element1, element2);
// var arr = Array(element0, element1, element2);
// var arr = [element0, element1, element2];

var fruits = ['Apple', 'Banana', 'Fraise'];
console.log(fruits.length);// length affiche le nombre d'élements du tableau

// Accéder (via son index) à un élément
var first = (fruits[0]);
// console.log(first);

var last = fruits[1];
console.log(last);

var last = fruits[fruits.length -3];
// nous accédons à l'index du tableau en sens inverse.
console.log(last)

// Au lieu de changer le tableau on modifie

// 1. Ajouter à la fin du tableau
var newLength = fruits.push('Orange');
console.log(fruits);

// 2. Retirer la dernière valeur du tableau
var newLength = fruits.pop();
console.log(fruits);