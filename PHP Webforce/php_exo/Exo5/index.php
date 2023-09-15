<?php
if (isset($_POST['Envoyer'])) {
    $erreur = "";
    extract($_POST);
    $nombre = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nombre)) {
        $erreur .= "Vous devez choisir un nombre<br>";
    }
    if ($erreur != "") {
        die($erreur); // la fonction die arrête immediatément l'execution du script PHP et affiche le contenu de la variable $erreur
    } else {
        if ($nombre % 2 === 0) {
            echo "$nombre est pair";
        } else {
            echo "$nombre est impair";
        }
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
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <input type="submit" name="Envoyer" value="Envoyer" />
    </form>
</body>

</html>