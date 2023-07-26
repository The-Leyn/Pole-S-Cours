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
    $('.texte span').css("display", "none");
});

$('a').hover(
    function() {
    $('.texte span').css("display", "block");
    if ($('#r1').is(':checked')) {
        $('#reponse1').css("color", "green");
        $('#img1').attr("src", "bon.png")
    } else {
        $('#reponse1').css("color", "red");
        $('#img1').attr("src", "mauvais.png")
    }
    if ($('#r4').is(':checked')) {
        $('#reponse2').css("color", "green");
        $('#img2').attr("src", "bon.png")
    } else {
        $('#reponse2').css("color", "red");
        $('#img2').attr("src", "mauvais.png")
    }
    if ($('#r8').is(':checked')) {
        $('#reponse3').css("color", "green");
        $('#img3').attr("src", "bon.png")
    } else {
        $('#reponse3').css("color", "red");
        $('#img3').attr("src", "mauvais.png")
    }},
    function () {
    $('.texte span').css("display", "none");
})
