<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constantes</title>
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
    // Sa fonction est similaire a celle d'une variavle, elle stocke une valeur récupéravle. Par contre, cette valeur , ne sera pas modifiable par la suite.

    // Une constante ce déclare avec le mot clé difine.
    // Elle prend deux argument. Le nom de la constante (par convention, en majuscule). Le second argument est la valeur de la constante

    define('VILLE', 'Poissy');

    echo VILLE . '<br>';

    // Tenter de redéfinire sa valeur comme en dessus générera une erreur php
    // define('VILLE', 'Paris');

    // echo VILLE . '<br>';
    // Il sera utile de stocker une valeir que l'on sait fixe, non variables, dans une constante, par exemple, ma valeur de l'URL de site. On pourra la stocker acec define('URL', '')
    ?>
    <?php

    // les constantes magiques sont des constantes déjà codées mise à notre disposition (il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)

    // cette constante donne le chemin physique jusqu'au fichier (file)
    echo __FILE__ . '<br>';
    // celle-ci donne le chemin physique jusqu'au dossier
    echo __DIR__ . '<br>';
    // cette dernière donne la ligne où elle est codée
    echo __LINE__ . '<br>';
    ?>
</body>

</html>