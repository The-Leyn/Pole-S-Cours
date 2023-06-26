'use strict' // Mode strict du javaScript

// Déclaration d'une variable
var nombre;

// La boucle do while s'éxécutera toujours au moins une fois, alors que la bloucle while peut ne pas s'éxecuter si lacondition est fausse dès le départ.

// On utlise cette boucle quand elle doit s'éxecuter au moins une fois pour que la comparaison puisse s'éffectuer

do {
    nombre = parseFloat(window.prompt('Veuillez saisir un nombre : '));
} while(isNaN(nombre) == true);

document.write('<p>Merci vous avez saisi <strong>' + nombre +'</strong></p>')