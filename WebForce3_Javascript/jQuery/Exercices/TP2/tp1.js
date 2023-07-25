$(document).ready(function() {
    $('.question').css({
        "border": "2px solid black",
        "background": "#9eeae0",
        "margin": "20px",
        "padding": "15px",
        "position": "relative"
    });
    $('.question img').css({
        "position": "absolute",
        "right": "20px",
        "bottom": "70px"
    })
    // $('.texte span').empty();
});

$('a').hover(function() {
    if ($('#r1:checked')) {
        $('#reponse1').css("color", "green");
    } else {
        $('#reponse1').css("color", "red");
    }
})
