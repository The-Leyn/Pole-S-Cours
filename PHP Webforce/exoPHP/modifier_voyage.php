<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style de base pour le corps de la page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Style de l'en-tête */
        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Style du titre */
        h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Style du formulaire */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Style des libellés et des champs de formulaire */
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Style du bouton */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style du lien de retour */
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Modifier un Voyage</title>
</head>

<body>
    <header>
        <h1>Modifier un Voyage</h1>
    </header>

    <?php

    // Connexion à la base de données

    $mysqli = new mysqli('localhost', 'root', '', 'voyage');

    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
    }

    // Récupérez les détails du voyage depuis la base de données en fonction de l'ID
    if (isset($_POST['voyage_id']) && is_numeric($_POST['voyage_id'])) {
        $id_voyage = $_POST['voyage_id'];
        print_r($_POST);

        $result = $mysqli->query("SELECT * FROM produits WHERE id = $id_voyage");

        $row = $result->fetch_assoc();
        print_r($row);

        // Affichez un formulaire pré-rempli avec les détails du voyage

        echo '<form action="traitement_modification.php" method="post" enctype="multipart/form-data">';
        echo '<label for="nom">Non du voyage :</label>';
        echo '<input type="text" name="nom" required value="' . $row['nom'] . '">';
        echo '<label for="description">Description:</label>';
        echo '<textarea name="description" rows="4" required >' . $row['description'] . '</textarea>';
        echo '<label for="image">Image:</label>';
        echo '<input type="file" name="image" accept="image/*" required value="' . $row['image'] . '">';
        echo '<label for="prix">Prix:</label>';
        echo '<input type="number" name="prix" required value="' . $row['prix'] . '">';
        echo '<input type="hidden" name="voyage_id" value="' . $row['id'] . '">';
        echo '<input type="hidden" name="chemin_old_image" value="' . $row['image'] . '">';
        echo '<button type="submit">Modifier</button>';
        echo '</form>';


        // $sql = "SELECT * FROM produits WHERE id = $id_voyage";



        // Modifier le voyage de la base de données
        // $sql = "DELETE FROM produits WHERE id = $id_voyage";

        // if ($mysqli->query($sql)) {
        //     echo 'Voyage supprimé avec succès.<br>';

        //     echo '<a href="index.php">Retour à la liste des produits</a>';
        // } else {
        //     echo 'Erreur lors de la suppression du voyage : ' . $mysqli->error;
        // }
    } else {
        echo 'Aucun voyage sélectionné.';
    }

    $mysqli->close();








    ?>
    <a href="index.php">Retour à la liste des voyages</a>
</body>

</html>