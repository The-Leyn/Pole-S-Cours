
// ====== ACTIVITÉ COURS 2 =====

//  GROUPE DE 3 OU 2

// Faites des recherches sur les sujet ci-dessous:
// Avec Javascript,
// 1 - Créer un nouvel élément HTML
// 2 - Ajoutez un nouvel élément créer dans la DOM
// 3 - Ajoutez un contenu HTML dans la DOM
// 4 - Ajoutez une classe dans un élément
// 5 - Modifier le CSS d'un élément

// Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours2.html


// 1 - Créez un nouvel élément de type paragraphe paragraphe
    
//     code
    const paragraphe = document.createElement("p");
    

// 2 - Ajoutez votre nouvel élément dans l'élément ayant pour id "main"
    
//     code
const main = document.getElementById('main');

main.appendChild(paragraphe);

// 3 - Ajoutez ce contenu HTML dans l'élément que vous créé lors de la première tâche: Mon <strong>grand</strong> contenu
    
//     code
paragraphe.innerHTML= '<strong>grand</strong>';

// 4 - Ajoutez la classe important à l'élément que vous avez crée lors de la première tâche
    
//     code
paragraphe.classList.add('important');

// 5 - Votre élément est maintenant rouge, mais on voudrait qu'il soit vert. 
//     Modifiez les styles de votre élément (en JavaScript) pour qu'il soit vert.
    
//     code
paragraphe.style.color = 'green';


