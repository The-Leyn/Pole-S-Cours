var nb1 = parseInt(prompt("Indiquez le premier nombre"));
var nb2 = parseInt(prompt("Indiquez le deuxième nombre"));

if ((!isNaN(nb1)) && (!isNaN(nb2))) {
// En Javascript NaN est l'abréviation de "NOT-A-NUMBER"
// is NaN() la méthode renvoie true si la valuer est NaN
    if (nb1<nb2) {
        document.write("Votre 1er Nombre : " + nb1 + " est plus petit que votre 2nd nombre : " + nb2);
    }   else if (nb1>nb2) {
        document.write("Votre 1er nombre : " + nb1 + " est plus grand que votre 2nd nombre : " + nb2);
    } else {
        document.write("Votre 1er nombre : " + nb1 + " est égal à votre deuxième nombre : " + nb2);
    }
} else {
    alert('Vous n\'avez pas saisi de chiffre(s)');
    // On ne rentre jamais dans cette condition car forcément la valeur entré est forcément un nombre grace au "parseInt"
}



// if (nb1 > nb2) {
//     document.write(nb1 + " est supérieur à " + nb2);
// }else if (nb1 < nb2) {
//     document.write(nb1 + " est inférieur à " + nb2);
// }else {
//     document.write(nb1 + " est égal a " + nb2);
// }