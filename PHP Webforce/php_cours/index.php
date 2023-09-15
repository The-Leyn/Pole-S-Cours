<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .test {
            width: 50px;
            height: 50px;
        }
    </style>
    
</head>

<body>
    <h1>PHP</h1>
    <h2>Premier cours !</h2>
    <?php
    $prenom = "Adrien <br>"; // string
    echo $prenom;

    $age = 19; // int
    $vrai = true; //bool
    $float = 19.99; //int

    if ($age >= 18) {
        echo "L'utilisateur est majeur";
    } else {
        echo "L'utilisateur est mineur";
    }

    for ($i = 1; $i <= 20; $i++) {
        echo "<div><p>Produit numéro $i </p></div>";
    }

    $color = array("red", "green", "blue", "yellow", "purple");
    print_r($color);
    var_dump($color);

    foreach ($color as $value) {
        echo "<br> $value";
    }

    $nbrDiv = 4;
    for ($i = 0; $i <= $nbrDiv; $i++) {
        echo '<div class="test" style="background-color:' . $color[$i] . ';"></div>';
    }




    foreach ($color as $value) {
        echo '<div class="test" style="background-color:' . $value . '"></div>';
    }

    function verifAge($age)
    {
        if ($age >= 18) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous êtes mineur";
        }
    }
    verifAge(15);

    // Créer une fonction "initiales" qui prend en paramètre votre nom et prenom et qui renvoie la première lettre de chaque chaîne de caractère

    function nameInit($prenom, $nom)
    {
        echo "<p>$prenom[0] $nom[0]</p>";
    }
    nameInit("Adrien", "Allard");

    // Méthode 2

    function nameInit2($prenom, $nom)
    {
        $prenomInitiale = substr($prenom, 0, 1);
        $nomInitiale = substr($nom, 0, 1);

        echo "<p>$prenomInitiale $nomInitiale</p>";
    }

    nameInit2("Adrien", "Allard");


    function dice()
    {
        $result = random_int(0, 20);
        echo $result;
    }
    dice();

    // Créer une fonction qui prend en paramètre "Couleur",
    // qui aura pour but de créer

    function createDiv($bgCouleur)
    {
        $dimmension = random_int(10, 140);

        // echo "<div style='width: ${dimmension}px; height:${dimmension}px; background-color: $bgCouleur;'></div>";

        echo "<div style='width:" . $dimmension . "px; height:" . $dimmension . "px; background-color: $bgCouleur;'></div>";
    }
    createDiv("green");

    // Création d'une fonction calculatrice

    function calculator($nb1, $sign, $nb2)
    {
        if ($sign == "+") {
            echo $nb1 + $nb2;
        } elseif ($sign == "-") {
            echo $nb1 - $nb2;
        } elseif ($sign == "*") {
            echo $nb1 * $nb2;
        } elseif ($sign == "/") {
            echo $nb1 / $nb2;
        }
    };
    calculator(5, "/", 6);
    ?>

</body>

</html>