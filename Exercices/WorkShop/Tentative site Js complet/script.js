const hamburgerButton = document.getElementById('hamburger');
const navigation = document.querySelector('nav');

hamburgerButton.addEventListener('click', function () {
    navigation.classList.toggle('hide');
    hamburgerButton.classList.toggle('open');
});





