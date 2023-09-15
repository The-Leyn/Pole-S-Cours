<?php
echo "Nombre aléatoires entre 1 et 100 : <br>";
function nombreAleatoire()
{
    return  mt_rand(1, 100);
}
for ($i = 0; $i < 10; $i++) {
    echo nombreAleatoire() . " ";
}
