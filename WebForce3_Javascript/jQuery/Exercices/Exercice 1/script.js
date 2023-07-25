// Ajout de li 
$('#add').click(function(){
    let value = $('input').val();
    $('ul').prepend(`<li>${value}</li>`);
});

// Supression de li
$('ul').on('click', 'li', function(){
    $(this).remove();
});

// $('li').click(function(){
//     $(this).remove();
// });

// Réinitialisation
$('#reset').click(function(){
    $('li').remove();
});

// OU

// $('#reset').click(function(){
//     $('ul').empty();
// });

// this correspond à l'élément sur lequel on se trouve