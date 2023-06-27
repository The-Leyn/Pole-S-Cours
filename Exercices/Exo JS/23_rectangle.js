'use strict' // mode strict du JS

// 1- Variables

// Recherche du bouton dans l'abre DOM = document Objet Model.
var boutton = document.getElementById("toggle-rectangle");

// Recherche su rectangle dans l'arbre DOM
var rectangle = document.querySelector("rectangle");

// 2- Fonctions

// 1-- Fonction au click sur le bouton

function onClickButton() {
    boutton.classList.toggle("hide");
}
