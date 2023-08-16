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
    </div>
    </div>

    <?php

    // Exercice avec une fonction qui va calculer la TVA pour un prix HT

    function calculTva()
    {

        // return permet de conserver un résultat récupérable ensuite dans notre code
        return 100 * 1.2 . '€ TTC';
    }
    // J'écécute en affichant le résultat
    echo calculTva() . "<br>";

    /* Etape 1
    Elle devra recevoir le prix en argument, puis calculera le prix TTC
    Objetctif : La fonction est capable de calculer le prix TTC dde n'importe qu'elle chiffre et pas juste 100.
    */
    function calculTva2($prix)
    {
        return $prix * 1.2 . ' € TTC';
    }

    echo calculTva2(500) . "<br>";

    // ETAPE 2
    /* La fonctiondoit à présent calculer le prix TTC en fonction de deux arguments qu'on doit lui donner. Le prix HT mais aussi quel taux de TVA appliquer au prix HT */

    function calculTva3($prix, $tva)
    {
        return $prix * $tva . " € TTC";
    }

    echo calculTva3(500, 1.055) . "<br>";
    echo calculTva3(300, 1.2) . "<br>";
    // Cette fonction prend toujours deux arguments, sauf que celui concernant le taux de tva va recevoir une valeur par défault

    function calculTva4($prix, $taux = 1.2)
    {
        // Elle mutiplie le prix par le taux
        return $prix * $taux . " € TTC";
    }
    // Au moment de l'exécution si je donne un argument (100), alors ma fonction va lui appliquer le taux par défault qui est 1.2
    echo calculTva4(100) . "<br>";

    // Si par contre je précise le prix mais aussi le taux (différent de celui par défault), alors ce dernier va ecraser la valeur du taux par défault pour la remplacer (1.055 va remplacer 1.2)
    echo calculTva4(100, 1.055) . "<br>";
    ?>
</body>

</html>