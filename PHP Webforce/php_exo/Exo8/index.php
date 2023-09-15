<?php
if (isset($_POST['Envoyer'])) {
    $erreur = "";
    extract($_POST);
    $nom = filter_var($nom, FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_var($prenom, FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nom)) {
        $erreur .= "Vous devez choisir un nom<br>";
    }
    if (empty($prenom)) {
        $erreur .= "Vous devez choisir un prenom<br>";
    }
    if ($erreur != "") {
        die($erreur); // la fonction die arrête immediatément l'execution du script PHP et affiche le contenu de la variable $erreur
    } else {
        echo "Bienvenue, $nom $prenom";
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
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <input type="submit" name="Envoyer" value="Envoyer" />
    </form>
</body>

</html>