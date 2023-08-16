<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Predéfinies</title>
    <style>
        /* Navbar container */
        .navbar {
            overflow: hidden;
            background-color: #333;
            font-family: Arial;
        }

        /* Links inside the navbar */
        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            /* Important for vertical align on mobile phones */
            margin: 0;
            /* Important for vertical align on mobile phones */
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Affichage
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../01-affichage/instructions.php">instructions</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Variables et constantes
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../02-variables et constantes/variables.php">Variables</a>
                <a href="../02-variables et constantes/constantes.php">Constantes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Concaténation et syntaxe
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../03-concatenation-et-syntaxe/concatenation.php">Concaténation</a>
                <a href="../03-concatenation-et-syntaxe/syntaxes-quotes.php">Syntaxe Quotes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Opérateur Arithmétique
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../04-Opérateur-arithmetique/arithmetique.php">Arithmétique</a>
                <a href="../04-Opérateur-arithmetique/operateur-affectation.php">Opérateur affectation</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Conditions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../05-Conditions/if-else.php">If-Else</a>
                <a href="../05-Conditions/switch.php">Switch</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Fonctions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../06-Fonctions/predefinies.php">Predefinies</a>
                <a href="../06-Fonctions/utilisateur.php">Utilisateur</a>
                <a href="../06-Fonctions/exo-tva.php">Exo TVA</a>
            </div>
        </div>
    </div>
    </div>

    <?php

    // Les fonctions prédéfinis sont celles qui sont déjà codées, mises à notre disposition par PHP (par exemple isset())
    // 01- strlen() et iconv_strlen()
    // Les deux permmettent de teester la longueur d'un chaine de caractères (pour que par exemple n n'entre pas 200 caractères pour un pseudo, on ca limiter au maximum 20)

    $phrase = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, sint?";

    echo iconv_strlen($phrase) . "<br>";


    $phrase2 = "étés";

    echo iconv_strlen($phrase2) . "<br>";
    echo strlen($phrase2) . "<br>";

    // 02- substring
    // Fonctions prédenfinies qu permet de sélectionner une chaine de caractères à des endroits précis et supprimer le reste
    // Elle prend 3 paramètres. La chaine à décuper, le point de départ et le point d'arrivée
    // Je veux conserver la prmière moitié de la chaine de caractères

    $phrase = "lepoles2023poissyadrien";
    echo substr($phrase, 0, 16) . "<br>";
    echo substr($phrase, 0, -4) . "<br>"; // Ici substr() prendra tous les caractères sauf les 4 derniers.

    //03- date()
    // Celle ci permet de récupérer l'année en cours

    echo date("d/m/Y") . "<br>";
    echo "&copy" . date("Y") . "AllardCorp" . "<br>";
    echo date("D-M-Y");

    // 04- Empty 
    // Contrairement a isset() la fonction vérifie si la varible(qui existe) contient une valeur

    // $phrase3 = "";  La variable n'a pas de contenu
    $phrase3 = " "; // La variable à du contenu ( un espace )

    if (empty($phrase3)) {
        echo "La variable n'a pas de contenu <br>";
    } else {
        echo "La varible a reçu du contenu <br>";
    }
    ?>
</body>

</html>