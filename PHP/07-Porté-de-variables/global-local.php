<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exo TVA</title>
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
        <div class="dropdown">
            <button class="dropbtn">Porter des variables
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../07-Porté-de-variables/global-local.php">Global et local</a>
            </div>
        </div>
    </div>
    </div>

    <?php
    // Les variables déclarées dans l'un des deux espaces ne sont pas reconnues automatiquement dans l'autre l'espace

    // Du global vers le local
    // Ci dessous la varibles $pays déclarée dans l'espace global ne sera pas reconnue dans l'espace local( dans la fonction) si je n'utilise pas sle mot clé global pour importer ma varible dans l'espace local. Sinon,  ERROR undefined varible $pays

    $pays = "France";

    function affichePays()
    {
        global $pays;
        echo $pays;
    }

    echo affichePays() . '<br>';

    // du local au global

    function afficheJour()
    {
        $jour = "vendredi";
        // Pour récupérer la valeur de la variable $jour dans mon espace global, je dois utiliser le mot clé return sinon même erreur undifined variable $jour
        return $jour;
        // La ligne en dessous ne s'affichera pas car tout ce qui est codé après un return n'est pas exécuté
        echo "Demain nous serons samedi";
    }

    echo afficheJour();
    ?>
</body>

</html>