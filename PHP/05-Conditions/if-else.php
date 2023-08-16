<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP if-else</title>
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
    // Je déclare 5 varibles que je vais tester

    $a = 22;
    $b = 33;
    $c = 44;
    $d = 55;
    $e = 66;

    // 01-if else simple
    // Le if va tester ce que on lui propose entre les parenthèse.
    // Si c'est vrai, il escécute ce qu'il ya dans le bloc d'instructions. Si ces faux il exécuter ce qui est dans le bloc s'instructions du else.

    if ($a < $b) {
        echo "Vrai $a est bien inférieur à $b<br>";
    } else {
        echo "Faux $a n'est pas inférieur à $b<br>";
    }

    // En PHP on n'est pas obliger de coder le else on peut tester quelque chose et si c'est vrai on exécute ce qui est dans le bloc d'instructions.
    // Mais si c'est faux, si on ne rentre pas dans ce cas de figure, on continue simplement à exécuter la suite du code.

    if ($b < $c) {
        echo "Vrai $b est bien inférieur à $c<br>";
    }

    // 02- Avec && (AND)
    // Avec && les deux test devrons être TRUE, sinon on rentre dans le else(le FALSE)

    if ($a < $b && $b > $c) {
        echo "Vrai, les deux afirmations sont exactes<br>";
    } else {
        echo "Faux, une des deux afirmations n'est pas vérifié <br>";
    }

    // 03- || (OR)
    // Avec || une seul des deux conditions vérifiés suffisent à rentrer dans le true (le bloc d'instructions du if)

    if ($a < $b || $b > $c) {
        echo "Vrai, une des deux afiramtions est exacte<br>";
    } else {
        echo "Faux, aucune des deux afirmations n'est verifiées<br>";
    }

    // 04- avec XOR (ou exclusif)
    // XOR exige que une seul des deux afirmations soit exacte. Si les deux sont exactes ou les deux fausses on entre dans le else.

    if ($a < $b xor $b > $c) {
        echo "Vrai, une seul des deux afiramtions est exacte<br>";
    } else {
        echo "Faux, Faux les deux afirmations sont exactes<br>";
    }

    // 05- Conditions avec trois possibilités. Si la première n'est pas vérifiée, on entre dans le seconde(else if). Si cette dernières est toujours false, on entre dans le else
    if ($a > $b) {
        echo "$a est bien supérieur à $b<br>";
    } elseif ($a != 22) {
        echo "Vrai, $a est diférent de 22<br>";
    } else {
        echo "Aucune des deux afirmations n'est vrai<br>";
    }

    // 06- Conditions contractée (appelée aussi ternaire)
    // La conditions contracté est utilsée quand on doit coder en php dans un bloc html.
    // Elle permet une syntaxe plus condensée.
    /* if($a < $b) {
    echo "Vrai, $a est bien inférieur à $b";
} else {
    echo "Faux $a n'est pas inférieur à $b";
}
*/

    // La conditions ternaires si dessous est équivalente de la condition mise en commentaire au dessus.

    // Entre les parenthèses, on écrit toujours ce que l'on veut tester
    // Après le ? on écrit le bloc d'instructions du if
    // Après les : on écrit le bloc d'instruction du else

    echo ($a < $b) ? "Vrai $a est bien inférieur à $b<br>" : "Faux, $a est supérieur à $b<br>";

    // 07- if else avec == et ===

    $var = 100;
    $var2 = '100';

    if ($var == $var2) {
        echo "$var et $var2 on le même valeur<br>";
    } else {
        echo "$var et $var2 n'on pas la  même valeur<br>";
    }
    // Avec === 
    if ($var === $var2) {
        echo "$var et $var2 on le même valeur et le même type<br>";
    } else {
        echo "$var et $var2 n'on  la  même valeur mais des types diférents<br>";
    }

    // 08- if(isset)/else 
    // isset() est une fonctions prédéfinie pour tester si une variable existe, a été déclarée avant dans le script.
    // C'est très utile pour savoir si on continue à dérouler le code, à l'éxecuter ou stopper avec un message d'erreur

    if (isset($test)) {
        echo "La varible test existe<br>";
    } else {
        echo "La varible test n'existe pas<br>";
    }
    $test = true;

    // Code de la même condition en version contractée, en ternaire (utile lorsque l'on est dans un bloc HTML)

    echo (isset($test)) ? "La varible test existe<br>" : "La variable test n'existe pas<br>";
    ?>
</body>

</html>