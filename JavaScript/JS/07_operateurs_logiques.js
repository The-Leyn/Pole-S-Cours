// L'opérateur ET : &&

// Si je cumule 2 conditions : 
// => prenom === prenomLogin;
// => monAge === ageLogin;

// Pour que les 2 corresponde pour être validés il faut les associer 

if ((prenomLogin === prenom) && (ageLogin === monAge)) {
    // ......code.......
    // Je n'entre ici que si les 2 conditions sont vraies
}

/* if ((A) && (B)) {
    => si A est VRAI et B VRAI => FAUX
    => si A est VRAI et B est Faux => FAUX
    => Si A est VRAI et B est faux => FAUX
    => SI A est VRAI et B est VRAI => VRAI
}
*/

//L'opérateur OU : || ou OR (| pipe = altgr + 6)

if ((c) || (d)) {
    /* 
    => Si C est FAUX et D est FAUX => FAUX
    => Si C est FAUX et D est VRAI => VRAI
    => Si C est VRAI et D est FAUX => VRAI
    => Si C est VRAI et D est VRAI => VRAI
     */
}

// L'opérateur "!" signifie : le contraire de ...

var utilisateur = true;

if (!utilisateur) {
    // ....CODE....
}

// OU / AUTRE MOYEN

if (utilisateur == false) {

}