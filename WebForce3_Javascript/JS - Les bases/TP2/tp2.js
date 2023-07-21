// ACTIVITE 1

/*
===== CRÉER UN GÉNÉRATEUR DE CITATION =====

Niveau 1

Les citations seront construites aléatoirement en assemblant des morceaux de phrase
Chaque citation est la combinaison d'au moins 3 morceaux de phrases (ex: sujet, verbe, complément)
A défaut d'être intelligible, la phrase doit être cohérente (pas de point d'exclamation au milieu d'une phrase)
Le résultat peut être simplement affiché dans la console

Niveau 2

Le programme propose les options suivantes :
- Choisir le nombre de citations générées (de 1 à 5)
- Choisir entre 2 types de générateurs de citations (vous devrez donc avoir 2 ensembles de phrases)
- Une fois les citations générées, proposer de générer de nouvelles citations ou d'arrêter là le programme

Remarque: la fonction .reload() n'est pas autorisée
*/

// Niveau 1 ----------------------------------------------------------------------

// Mes tableaux :

let sujet = ["la foret", "l'humain", "la voiture"];
let verbe = ["mange", "sent", "ecrase"];
let complement = ["le chien", "la plage", "le mur"];

let solution = Math.floor(Math.random() * 100) + 1;

if (solution < 25) {
    console.log(`${sujet[0]} ${verbe[1]} ${complement[1]}`);
} else if (solution <= 50) {
    console.log(`${sujet[1]} ${verbe[2]} ${complement[0]}`);
} else if (solution <= 75) {
    console.log(`${sujet[2]} ${verbe[0]} ${complement[2]}`);
} else {
    console.log(`${sujet[1]} ${verbe[1]} ${complement[0]}`);
}

// Fin Niveau 1 -------------------------------------------------------------------