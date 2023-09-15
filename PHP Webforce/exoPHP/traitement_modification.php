<?php
print_r($_POST);
extract($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // print_r($_SERVER);
    // Connexion à la base de données
    $mysqli = new mysqli('localhost', 'root', '', 'voyage');

    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
    }
    // Traitement de l'image
    $image = $_FILES["image"];
    $image_nom = $image["name"];
    $image_tmp = $image["tmp_name"];
    $dossier_images = "images/";

    $oldImage = "images/" . $chemin_old_image;
    print_r($_FILES);
    // echo $oldImage;
    // Déplacez l'image dans le dossier d'images
    move_uploaded_file($image_tmp, $dossier_images . $image_nom);

    // Préparez et exécutez la requête SQL pour modifier le voyage

    // $sql = "UPDATE produits SET nom = '$nom', description = '$description', prix = '$prix'";

    $sql = "UPDATE `produits` SET `nom`='$nom',`description`='$description',`image`='$image_nom',`prix`='$prix' WHERE id = $voyage_id";
    $stmt = $mysqli->prepare($sql);


    // $sql = "INSERT INTO produits (nom, description, image, prix) VALUES (?, ?, ?, ?)";
    // $stmt = $mysqli->prepare($sql);
    // $stmt->bind_param("sssd", $nom, $description, $image_nom, $prix);



    if ($stmt->execute()) {
        // Redirigez l'utilisateur vers la page de confirmation ou une autre page
        // header("Location: confirmation-ajout-voyage.php");
        // exit();

        if ($chemin_old_image != $image['full_path']) {
            unlink($oldImage);
        }


        echo '<br><br>Le voyage a été modifier';
        echo '<br><a href="index.php">Retour à l\'index</a>';
        header("Location: index.php");
    } else {
        echo "Erreur lors de l'ajout du voyage.";
    }

    $stmt->close();
    $mysqli->close();
}

// Connexion à la base de données


// Mettez à jour les détails du voyage dans la base de données
