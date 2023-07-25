/* ======= EXERCICE JQUERY - APPLICATION 2 ========


Objectif:

Créer un code qui permet d'afficher et de masquer le contenu du bloc  <div class="menu"> quand on clique sur l'icone burger

1er clic : le contenu disparait
2nd clic : le contenu réapparait
3ème clic : le contenu disparait
etc...
 */
$('div.burger-menu').click(function() {
    if($('.bar').hasClass('hideBlock')) {
        $('.bar').removeClass("hideBlock");
        $('.croix').addClass('hideBlock');
        $('.menu').slideToggle();
    } else {
        $('.croix').removeClass("hideBlock");
        $('.bar').addClass('hideBlock');
        $('.menu').slideToggle()
    }

    // $('.menu').css('display', 'block');
})