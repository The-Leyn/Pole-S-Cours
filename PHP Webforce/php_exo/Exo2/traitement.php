<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $sexe = $_POST["sexe"];
    $pays = $_POST["pays"];
    $langages = $_POST['lang'];
    $domaines = $_POST['domaine'];

    // print_r($optionsSelectionnees);



    // echo "Nom : " . $nom . "<br>";
    // echo "Prenom : " . $prenom . "<br>";
    // echo "Email : " . $email . "<br>";
    // echo "Sexe : " . $sexe . "<br>";
    // echo "Pays : " . $pays . "<br>";

    // echo "Langages :";
    // foreach ($langages as $key) {
    //     echo $key . " ";
    // };


    // echo "options : " . $optionsSelectionnees[0] . "<br>";
}
*/
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Valider et filtrer les données
//     $nom = filter_var($_POST["nom"], FILTER_SANITIZE_SPECIAL_CHARS);
//     $prenom = filter_var($_POST["prenom"], FILTER_SANITIZE_SPECIAL_CHARS);
//     $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
//     $sexe = filter_var($_POST["sexe"], FILTER_SANITIZE_SPECIAL_CHARS);
//     $pays = filter_var($_POST["pays"], FILTER_SANITIZE_SPECIAL_CHARS);

//     // Valider les tableaux (langages et domaines)
//     $langages = isset($_POST['lang']) ? $_POST['lang'] : array();
//     $domaines = isset($_POST['domaine']) ? $_POST['domaine'] : array();
// }

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid #333;
        }

        td,
        th {
            padding: 5px;
        }

        thead,
        tfoot {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <table padd>
        <thead>
            <tr>
                <th>Champs</th>
                <th>Valeurs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nom</td>
                <td><?php echo $nom; ?></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><?php echo $prenom; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td><?php echo $sexe; ?></td>
            </tr>
            <tr>
                <td>Domaines</td>
                <td><?php foreach ($domaines as $key) {
                        echo $key . "<br>";
                    };; ?></td>
            </tr>
            <tr>
                <td>Pays</td>
                <td><?php echo $pays; ?></td>
            </tr>
            <tr>
                <td>Langage</td>
                <td><?php foreach ($langages as $key) {
                        echo $key . "<br>";
                    };; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html> -->


<!-- CORRECTION -->
<?php

// Vérifie si le formulaire a été soumis(lorsque le bouton 'Envoyer' est cliqué)
if (isset($_POST['Envoyer'])) {
    // Initialise une variable pour stocker les erreur du formulaire
    $erreur = "";
    // La fonction extract($_POST) permet d'extraire les données du tableau $_POST et de créer des variables avec les noms correspondants.
    extract($_POST);

    // Nettoie le nom et le prénom en supprimant les caratéres spéciaux
    $nom = filter_var($nom, FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_var($prenom, FILTER_SANITIZE_SPECIAL_CHARS);
    // Pour chaque caractére spécial, il effectue l'une des actions suivantes:
    // * Il le supprime s'il est dangereux ou non désiré
    // * Il se convertit en son équivalent HTML entité, ce qui signifie qu'il le remplace par une séquence de caractères HTML qui est sécuritaire à afficher dans une page web

    // Validation de l'email en utilisant la fonction filter_var
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $erreur .= "Email incorrect<br>";
    }

    //Vérifie si le champ 'domaine' n'est pas défini
    if (!isset($domaine)) {
        $erreur .= "Vous devez choisir un domaine<br>";
    }

    // Vérifie si le champ 'lang' n'est pas défini
    if (!isset($lang)) {
        $erreur .= "Vous devez choisir au moins un langage <br>";
    }

    // Vérifie si le champ 'pays' n'est pas défini ou est vide

    if (!isset($pays) || empty($pays)) {
        $erreur .= " Vous devez choisir votre pays<br>";
    }

    // Vérifie si le champ 'sexe' n'est pas défini
    if (!isset($sexe)) {
        $erreur .= "vous devez choisir votre sexe<br>";
    }

    //Affiche les erreurs s'il y en a

    if ($erreur != "") {
        die($erreur); // la fonction die arrête immediatément l'execution du script PHP et affiche le contenu de la variable $erreur
    } else {
        // si le forlulaire est valide, affiche les résutats dans un tableau HTML
        $resultat = "<table border>";
        $resultat .= "<tr><td>Champ</td><td>Valeur</td></tr>";
        $resultat .= "<tr><td>Nom</td><td>$nom</td></tr>";
        $resultat .= "<tr><td>Prénom</td><td>$prenom</td></tr>";
        $resultat .= "<tr><td>Email</td><td>$email</td></tr>";
        $resultat .= "<tr><td>Sexe</td><td>$sexe</td></tr>";

        // La fonctione implode pour rassembler les éléments du tableau 'domaine' en une chaîne, sépareé par des virgules
        $resultat .= "<tr><td>Domaine</td><td>" . implode(",", $domaine) . "</td></tr>";
        $resultat .= "<tr><td>Pays</td><td>$pays</td></tr>";
        $resultat .= "<tr><td>Langage</td><td>" . implode(",", $lang) . "</td></tr>";

        $resultat .= "</table>";

        echo $resultat;
    }
}
