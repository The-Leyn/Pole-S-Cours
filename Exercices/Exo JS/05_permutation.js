var nombre1 = 5;
var nombre2 = 3;
console.log("Nombre 1 " + nombre1,);
document.write("<h3> Résultat : <br>Nombre 1 = " + nombre1 + "</h3>");


console.log("Nombre 2 " + nombre2);
document.write("<h3>Nombre 2 = " + nombre2 + "</h3>");

var vide = nombre1;
nombre1 = nombre2;
nombre2 = vide;
console.log("Nombre 1 " + nombre1);
console.log("Nombre 2 " + nombre2);


