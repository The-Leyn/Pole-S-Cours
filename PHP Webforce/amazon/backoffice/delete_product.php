<?php
require_once('lib/db.php');
session_start();
if (empty($_SESSION)) {
    header('Location: login.php');
}
if ($_SESSION['user_statut'] == 0) {
    header('Location: ../index.php');
}

print_r($_GET);

if (!empty($_GET)) {
    extract($_GET);

    $sqlDeleteUpdate = "DELETE FROM `product` WHERE `id_product`= $idProduct";

    // Exécution de la requête SQL
    if (mysqli_query($connexion, $sqlDeleteUpdate)) {
        // L'insertion a réussi
        echo "Delete Successful";
        header("Location: ./index.php");
    } else {
        // L'insertion a échoué
        echo "Delete error " . mysqli_error($connexion);
    }
}
