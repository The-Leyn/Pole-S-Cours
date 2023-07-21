// ====== ACTIVITÉ COURS =====


// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.
const mainContent = document.getElementById('main-content');

// 2 - Pour ID main-content, change le contenu textuel par "Bonjour, je suis un nouveau texte"

mainContent.textContent = "Bonjour, je suis un nouveau texte";

// 3 - Récupérez le premier élément ayant pour classe important

const important = document.querySelector('.important');

// 4 - Change lui sa class par newClass, le contenu textuel devra s'afficher en rouge

important.classList.replace('important', 'newClass');