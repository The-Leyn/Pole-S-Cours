// alert("test");
var moyenne = parseFloat(prompt("Qu'elle est ta moyenne au bac ?"));

if (moyenne < 10) {
    document.write("Tu est recalé");
    // J'affiche qu'il est recalé
} else if ((moyenne >= 10) && (moyenne < 12)) {
    // sinon, si la moyenne est entre 10 et 12
    document.write("Tu passes !");
    // J'affiche qu ele candidat passe
} else if ((moyenne >= 12) && (moyenne <= 20)) {
    // sinon, si la moyenne est entre 12 et 20
    document.write("Bravo, tu as une mention !");
    // J'affiche que le candidat a une mention
} else {
    document.write("Erreur de saisi");
    // Je lui indique que l'on a pas saisi ce que l'on lui demander.
}