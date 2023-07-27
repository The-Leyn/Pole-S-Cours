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


const sujets2 = [
    "L'astronautes",
    "L'étoiles",
    "La planète",
    "La galaxie",
    "L'astéroïde",
    "La lune",
    "Les étoiles",
    "Les comètes",
    "Les extraterrestres",
    "Les sondes spatiales",

];
      
const verbes2 = [
    "explore",
    "observe",
    "voyage",
    "survole",
    "colonise",
    "découvre",
    "orbit",
    "atterit",
    "étudie",
    "chill",
];
      
const complements2 = [
    "dans une galaxie lointaine",
    "autour d'une étoile brillante",
    "sur une planète inconnue",
    "à bord d'une station spatiale",
    "à travers l'espace interstellaire",
    "à la recherche d'une technologie avancée",
    "pendant une mission spatiale",
    "à la recherche de vie extraterrestre",
    "lors d'une éclipse solaire",
    "dans l'immensité du cosmos",
];




function randomElement(tableau) {
    const index = Math.floor(Math.random() * tableau.length);
    return tableau[index];
}
      
function randomCitation() {
const selectTypeValue = selectType.value;
    if (selectTypeValue === "space") {
        const sujet = randomElement(sujets2);
        const verbe = randomElement(verbes2);
        const complement = randomElement(complements2);
        
        const citation = `${sujet} ${verbe} ${complement}.`;
        return citation;
    } else {

    




    const sujet = randomElement(sujets);
    const verbe = randomElement(verbes);
    const complement = randomElement(complements);
      
    const citation = `${sujet} ${verbe} ${complement}.`;
    return citation;
    }

}

let selectType = document.getElementById('type');




let selectNumber = document.getElementById('selectNumber');
let generateButton = document.querySelector('.container-input button');
let containerCitations = document.querySelector('.container-citations');

function generateCitations(count) {
  containerCitations.innerHTML = ''; 

  for (let i = 0; i < count; i++) {
    const paragraphe = document.createElement('p');
    paragraphe.textContent = randomCitation();
    containerCitations.appendChild(paragraphe);
  }
}

generateButton.addEventListener('click', function() {
  const selectValue = parseInt(selectNumber.value);

  switch (selectValue) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
      generateCitations(selectValue);
      break;

    default:
      break;
  }
});