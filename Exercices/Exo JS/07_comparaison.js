var nb1 = parseInt(prompt("Indiquez le premier nombre"));
var nb2 = parseInt(prompt("Indiquez le deuxième nombre"));

if ((!isNaN(nb1)) && (!isNaN(nb2))) {
    
}



if (nb1 > nb2) {
    document.write(nb1 + " est supérieur à " + nb2);
}else if (nb1 < nb2) {
    document.write(nb1 + " est inférieur à " + nb2);
}else {
    document.write(nb1 + " est égal a " + nb2);
}