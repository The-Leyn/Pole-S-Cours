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

// Morceaux de phrases
// const sujets = [
//     "Le chat",
//     "Le chien",
//     "La montagne",
//     "La mer",
//     "Le soleil",
//     "La lune",
//     "Les étoiles",
//   ];
  
//   const verbes = [
//     "court",
//     "saute",
//     "nage",
//     "brille",
//     "chante",
//     "danse",
//     "dort",
//   ];
  
//   const complements = [
//     "dans le jardin",
//     "sur la plage",
//     "dans le ciel",
//     "dans la forêt",
//     "sous la pluie",
//     "pendant la nuit",
//     "à l'aube",
//   ];
  
//   function randomElement(tableau) {
//     const index = Math.floor(Math.random() * tableau.length);
//     return tableau[index];
//   }
  
//   function randomCitation() {
//     const sujet = randomElement(sujets);
//     const verbe = randomElement(verbes);
//     const complement = randomElement(complements);
  
//     const citation = `${sujet} ${verbe} ${complement}.`;
//     return citation;
//   }
  
//   console.log(randomCitation());

// Fin Niveau 1 -------------------------------------------------------------------
// Niveau 2 -----------------------------------------------------------------------





// Fin Niveau 2 -------------------------------------------------------------------
const sujets = [
    "Le chat",
    "Le chien",
    "La montagne",
    "La mer",
    "Le soleil",
    "La lune",
    "Les étoiles",
];
      
const verbes = [
    "court",
    "saute",
    "nage",
    "brille",
    "chante",
    "danse",
    "dort",
];
      
const complements = [
    "dans le jardin",
    "sur la plage",
    "dans le ciel",
    "dans la forêt",
    "sous la pluie",
    "pendant la nuit",
    "à l'aube",
];

function randomElement(tableau) {
    const index = Math.floor(Math.random() * tableau.length);
    return tableau[index];
}
      
function randomCitation() {
    const sujet = randomElement(sujets);
    const verbe = randomElement(verbes);
    const complement = randomElement(complements);
      
    const citation = `${sujet} ${verbe} ${complement}.`;
    return citation;
}

let selectNumber = document.getElementById('selectNumber');
const selectOption = selectNumber.options[selectNumber.selectedIndex];
const selectValue = selectOption.value;
console.log(selectValue);


const generateButton = document.querySelector('.container-input button')
console.log(generateButton)

generateButton.addEventListener('click', function() {
    switch (key) {
        case value:
            
            break;
    
        default:
            break;
    }
})