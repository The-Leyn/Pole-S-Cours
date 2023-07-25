/*======= EXERCICE - JQUERY ========

=> Application du cours

Voici ce que ton code doit permettre de faire :

1 - Ajoute la class newClass au paragraphe #p1, #p3. Ils doivent s'afficher en bleu
2 - Créer un bouton qui permet de mettre en gras le paragraphe #p2 
et de supprimer ce caractère en gras quand on clique dessus
3 - Change le background du paragraphe 4 en jaune


Bon courage !
*/
// 1
$('#p1, #p2').addClass('newClass');

// 2

$('#start').click(function(){
    console.log($('#p2').css("font-weight"));
    if($('#p2').css("font-weight") === '700') {
        
        $('#p2').css('font-weight', 'normal');
    } else {
        $('#p2').css('font-weight', '700');
    }
    
});

// 3
$('#p4').css('background', 'yellow')