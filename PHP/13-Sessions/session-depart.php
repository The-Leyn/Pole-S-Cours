<!-- Une session sert à conserver des informations temporaires. On peut ouvrir une session pour l'utilisateur qui a mis un produit dans son panier mais on n'envoie pas cette information en BDD(Base de données) car elle n'est pas définitive. Peut-être va t-il suprimer ce produit de son panier, ou en ajouter un deuxième etc... -->

<?php

// Pour une session puisse débutée et que l'on puisse récupérer ses informations, il faut déclaré en haut du fichier, avant toute chose (!Doctype etc) une session start

session_start();

$_SESSION['prenom'] = "Adrien";
$_SESSION['statut'] = "admin";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>

<body>
    <button><a href="session-arriver.php">Aller vers le profil</a></button>
</body>

</html>