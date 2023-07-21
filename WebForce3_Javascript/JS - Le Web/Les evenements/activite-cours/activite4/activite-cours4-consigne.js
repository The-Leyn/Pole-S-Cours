// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Détecter le mouvement de la souris
2 - Lire le contenu d'un champ texte dans un formulaire

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours4.html


/*
Ecoutez les événements input sur l'élément #name afin de savoir quand le contenu du champ texte est changé. Affichez le contenu actuel dans l'élément #res-name
*/
const inputName = document.getElementById('name');

inputName.addEventListener('input', function() {
    const inputNameValue = inputName.value;
    const resName = document.getElementById('res-name');
    resName.textContent = inputNameValue;
});
  
/*
Ecouter l'événement du changement de choix du genre (#gender), et afficher le résultat dans l'élément #res-gender.
*/
const selectGender = document.getElementById('gender');

selectGender.addEventListener('change', function() {
    const selectGenderValue = selectGender.value;
    const resGender = document.getElementById('res-gender');
    resGender.textContent = selectGenderValue;
})
  
/*
Afficher les coordonnées de la souris à l'intérieur de l'élément #result dès que celle-ci passe par dessus. Ce que nous voulons, c'est avoir les coordonnées relatives au coin en haut à gauche de l'élément #result.
*/
const result = document.getElementById('result');

result.addEventListener('mousemove', function(e) {
    const mouseX = document.getElementById('mouse-x');
    const mouseY = document.getElementById('mouse-y');
    const mouseXres = e.clientX - result.getBoundingClientRect().left;
    const mouseYres = e.clientY - result.getBoundingClientRect().top;
    mouseX.textContent = mouseXres;
    mouseY.textContent = mouseYres;
})



  