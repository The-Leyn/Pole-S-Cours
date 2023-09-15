<?php
if (isset($_POST['Envoyer'])) {
    $erreur = "";
    extract($_POST);
    $nombre1 = filter_var($nombre1, FILTER_SANITIZE_SPECIAL_CHARS);
    $nombre2 = filter_var($nombre2, FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nombre1)) {
        $erreur .= "Vous devez choisir un nombre 1<br>";
    }
    if (empty($nombre2)) {
        $erreur .= "Vous devez choisir un nombre 2<br>";
    }
    if ($erreur != "") {
        die($erreur); // la fonction die arrête immediatément l'execution du script PHP et affiche le contenu de la variable $erreur
    } else {
        echo "La somme de $nombre1 et $nombre2 est : " . $nombre1 + $nombre2;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="Post">
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" id="nombre1" name="nombre1">
        <br>
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" id="nombre2" name="nombre2">
        <br>
        <input type="submit" name="Envoyer" value="Envoyer" />
    </form>
</body>

</html>