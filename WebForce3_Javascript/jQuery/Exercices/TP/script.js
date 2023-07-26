let solution = Math.floor(Math.random() * 100) + 1;
console.log(solution);
let compteur = 7;

$('.box-container #submit').click(function() {
    let nombre = parseInt($('input').val(), 10);
    console.log($('input').val());
    if (compteur <= 1) {
        $('p').text(solution);
        $('.box-container').toggleClass('loose');
        $('span').text(`Perdu, vos tentatives sont épuisés`);
        $('.box-container button').toggleClass('hide');
    } else {
        if (nombre === solution) {
            $('p').text(solution);
            $('.box-container').toggleClass('win');
            $('span').text(`Bravo c'est la bonne réponse`);
            $('.box-container button').toggleClass('hide');
        } else if (nombre > solution) {
            compteur--;
            $('p').text(`${$('input').val()} > ?`);
            $('span').text(`Il vous reste ${compteur} tentative(s)`);
        } 
        else {
            compteur--;
            $('p').text(`${$('input').val()} < ?`);
            $('span').text(`Il vous reste ${compteur} tentative(s)`);
        }
    }
})

$('#rejouer').click(function() {
    compteur = 7;
    solution = Math.floor(Math.random() * 100) + 1;
    $('.box-container button').toggleClass('hide');
    $('.box-container').removeClass('loose');
    $('.box-container').removeClass('win');
    $('p').text('?');
    $('span').empty();

})