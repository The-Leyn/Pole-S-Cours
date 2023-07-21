
// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Ecouter un évènement
2 - La propagation des évènements 
3 - Comment stopper la propagation des évènement
4 - Modifier le comportement par défaut d'un élément

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours3.html


/* 
Partie 1
Commençez par écouter les événements click depuis l'élément #parent. 
Puis affichez le nombre de clics dans l'élément #parent-count.
*/
const parent = document.getElementById('parent');
let parentCompteur = 0;

parent.addEventListener('click', function() {
    parentCompteur ++;
    const parentCount = document.getElementById('parent-count');
    parentCount.textContent = parentCompteur;
});


/* 
Partie 2
Faite la même chose mais avec l'élément #child. 
Il faudra afficher le nombre de clics sur cet élément dans l'élément #child-count.
*/
const child = document.getElementById('child');
let childCompteur = 0;

child.addEventListener('click', function(e) {
    childCompteur++;
    const childCount = document.getElementById('child-count');
    childCount.textContent = childCompteur;
    // parentCompteur--;
    e.stopPropagation();
    e.preventDefault();
})

/*
Partie 3
Nous souhaitons maintenant que lorsque nous cliquons sur l'élément #child, seul le compteur de l'enfant se mette à jour.
N'oubliez pas que l'élément enfant se trouve à l'intérieur de l'élément parent
*/


/*
Partie 4
On veut éviter qu'un clic sur le lien ne nous fasse changer de page. 
Supprimons donc ce comportement par défaut. 
*/


