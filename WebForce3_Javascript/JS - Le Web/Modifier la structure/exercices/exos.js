/*
// EXERCICE 1

Ajouter dans le code ci-dessous, sous la liste des langages un paragraphe contenant un lien vers l'URL suivante:
https://fr.wikipedia.org/wiki/Liste_de_langages_de_programmation

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quelques langages</title>
</head>

<body>
    <h1 class="debut">Quelques langages</h1>
    <div id="contenu">
        <ul id="langages">
            <li id="cpp">C++</li>
            <li id="java">Java</li>
            <li id="csharp">C#</li>
            <li id="php">PHP</li>
        </ul>
    </div>

    <script src=""></script>
</body>

</html>
*/
const paragraphe = document.createElement('p');
const lien = document.createElement('a');
lien.textContent = 'Liste des langages de programation';
lien.setAttribute('href', 'https://fr.wikipedia.org/wiki/Liste_de_langages_de_programmation');
//lien.href = 'https://fr.wikipedia.org/wiki/Liste_de_langages_de_programmation';

paragraphe.appendChild(lien);

const contenu = document.getElementById('contenu');

contenu.appendChild(paragraphe);


// EXERCICE 2

/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quelques journaux en ligne</title>
</head>

<body>
    <h1>Quelques journaux en ligne</h1>
    <div id="contenu"></div>

    <script src=""></script>
</body>

</html>
_____________________________________________*/

// Liste des journaux
var journaux = ["http://lemonde.fr", "http://lefigaro.fr", "http://liberation.fr"];

// TODO : ajouter la liste des journaux sur la page, dans la div "contenu"
// Chaque lien doit être cliquable !

const contenu = document.getElementById('contenu');

/*
let lien = document.createElement('a');
lien.href = journaux[0];
lien.textContent = 'LeMonde';
contenu.appendChild(lien);

let lien2 = document.createElement('a');
lien2.href = journaux[1];
lien2.textContent = 'LeFigaro';
contenu.appendChild(lien2);

let lien3 = document.createElement('a');
lien3.href = journaux[2];
lien3.textContent = 'Libération';
contenu.appendChild(lien3);
*/

journaux.forEach( function(lelien) {
    const lien = document.createElement('a');
    lien.href = lelien;
    lien.textContent = 'Journaux';
    contenu.appendChild(lien);
})

/*
var journaux = ["http://lemonde.fr", "http://lefigaro.fr", "http://liberation.fr"];
const contenu = document.getElementById('contenu');

// Loop through the journaux array and create anchor elements for each journal
for (let i = 0; i < journaux.length; i++) {
  const lien = document.createElement('a');
  lien.href = journaux[i];
  lien.textContent = getJournalName(journaux[i]);
  contenu.appendChild(lien);
}


// Helper function to extract the journal name from the URL
function getJournalName(url) {
  // Assuming the URL ends with the journal name followed by '.fr'
  return url.split('//')[1].split('.')[0];
}
*/



// EXERCICE 3
/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mini-dictionnaire</title>
</head>

<body>
    <h1>Un mini-dictionnaire</h1>
    <div id="contenu"></div>

    <script src=""></script>
</body>

</html>
_____________________________________________*/

// Liste des mots du dictionnaire
var mots = [
    {
        terme: "Procrastination",
        definition: "Tendance pathologique à remettre systématiquement au lendemain"
    },
    {
        terme: "Tautologie",
        definition: "Phrase dont la formulation ne peut être que vraie"
    },
    {
        terme: "Oxymore",
        definition: "Figure de style qui réunit dans un même syntagme deux termes sémantiquement opposés"
    }
];

// TODO : créer le dictionnaire sur la page web, dans la div "contenu"
// Aide voir => https://developer.mozilla.org/fr/docs/Web/HTML/Element/dl
// Chaque mot du dictionnaire doit être mis en valeur : utilisez pour cela la balise HTML<strong>.

const contenu =  document.getElementById('contenu');

mots.forEach(function (exemple) {
  const mot = document.createElement('p');
  mot.innerHTML = `<strong>${exemple.terme}</strong> : ${exemple.definition}`;
  contenu.appendChild(mot);
})

// EXERCICE 4
/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Couleurs</title>
</head>

<body>
    <h1>Paragraphe 1</h1>
    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim fringilla dapibus. Curabitur placerat efficitur molestie. Quisque quis consequat nibh. Aenean feugiat, eros eget aliquam vulputate, leo augue luctus lectus, non lobortis libero quam non sem. Aliquam sit amet tincidunt ex, mollis interdum massa. Sed vulputate mi id accumsan scelerisque. Nam interdum iaculis ipsum, non convallis mauris faucibus et. Pellentesque in imperdiet lorem, in condimentum neque. Nullam auctor sem eu sapien pulvinar, non ultricies ipsum hendrerit. Aliquam at magna convallis, ultrices enim vitae, mollis lacus.</div>

    <h1>Paragraphe 2</h1>
    <div>Vivamus at justo blandit, ornare leo id, vehicula urna. Fusce sed felis eget magna viverra feugiat eget nec orci. Duis non massa nibh. Aenean vehicula velit a magna lobortis tempor ut quis felis. Proin vitae dui a eros facilisis fringilla ut ut ante. Curabitur eu magna dui. Ut hendrerit suscipit metus, id vehicula velit. Pellentesque ac nisl rutrum, efficitur velit dictum, cursus odio.</div>

    <h1>Paragraphe 3</h1>
    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet pharetra massa. Nulla blandit erat nulla, et scelerisque libero varius ut. Praesent bibendum eu magna ullamcorper venenatis. Sed ut pellentesque leo. Sed ultrices sapien consequat odio posuere gravida. Nunc lorem tortor, volutpat nec maximus in, suscipit a ex. Praesent efficitur ex ut viverra placerat. Vivamus eu sapien sed enim vehicula sodales.</div>

    <script src=""></script>
</body>

</html>
*/

/* 
Faire saisir à l'utilisateur la nouvelle couleur du texte 
puis la nouvelle couleur de fond des trois paragraphes de la page web. 
Les couleurs sont saisies sous leur nom anglais ou bien en valeurs RGB.
*/ 
const couleurText = prompt('Saisissez la couleur du texte des paragraphes (nom anglais ou bien en valeurs RGB)');
const couleurBackground = prompt('Saisissez la couleur de fond des paragraphes (nom anglais ou bien en valeurs RGB)');

const paragraphes = document.querySelectorAll('div');
console.log(paragraphes);

paragraphes.forEach(function (paragraphe) {
  paragraphe.style.color = couleurText;
  paragraphe.style.backgroundColor = couleurBackground;
});

// EXERCICE 5

// index.html

/*
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/infos.css">
        <title>Informations</title>
    </head>

    <body>
        <div id="contenu">ABC
            <br>Easy as
            <br>One, two, three
        </div>
        <div id="infos"></div>

        <script src=""></script>
    </body>
</html>
*/

// style.css
/*
#contenu {
    float: right;
    margin-top: 100px;
    margin-right: 50px;
}
*/


// TODO : Ajouter à la page web une liste affichant la hauteur et la longueur de l'élément identifié par "contenu".

