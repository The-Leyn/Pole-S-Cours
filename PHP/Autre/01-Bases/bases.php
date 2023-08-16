<style>
    body {
        margin-bottom: 400px;
        padding: 60px;
    }

    h2 {
        font-size: 2em;
        color: orange;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        text-align: center;
    }

    pre {
        border: 1px solid #000;
        height: 50px;
        background: #ccc;
    }

    pre p {
        font-size: 1.2em;
        padding-left: 20px;
    }

    .topnav {
        background: #333;
        overflow: hidden;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background: #ddd;
        color: black;
    }

    .texte p {
        color: black;
        font-size: 1.3em;
        text-indent: justify;
    }
</style>
<div class="topnav">
    <a href="bases.php">Bases</a>
    <a href="arithmetiques.php">Arithmétiques</a>
    <a href="boucles.php">Boucles</a>
    <a href="concatenation.php">Concaténation</a>
    <a href="conditions.php">Conditions</a>
    <a href="constantes.php">Constances</a>
    <a href="date.php">Dates</a>
    <a href="fonctions.php">Fonctions</a>
    <a href="inclusion.php">Inclusion</a>
    <a href="objet.php">Objets</a>
    <a href="">Tableau</a>
    <a href="">Variables</a>
</div>
<?php
// Pour ouvrir un passage PHP, on utilise la balise suivante
echo '<h2> Les balises PHP </h2>'; // echo est une instruction qui permet d'afficher dans le navigateur. Tous les instructions se termine par un ";". Dans un echo nous pouvons aussi mettre du html
// Pour fermer un passage en php, on utilise la balise suivante:
?>
<div class="texte">
    <p>Pour éxécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension ".php" et dans un passage PHP. Pour ouvrir un passage en PHP on utilise < ?php pour le refermé on utilise ?>. En dehors des balises d'ouverture et de fermeture d'un passage PHP, il est possible d'écrire du HTML</p>
</div>
<?php
echo '<h2>AFFICHAGE</h2>';
echo '<pre><p> "Bonjour"</p></pre>';
echo 'Bonjour <br>';

print 'Nous sommes mardi <br>'
?>
<div class="texte">
    <p>Print est une autre instruction d' affiche. Il n'y a pas (ou) peu de différence avec un echo</p>
    <p>Autres instruction d'affichage que nous verrrons plus loin:</p>
</div>
<ul>
    <li>print_r()</li>
    <li>var_dump()</li>
</ul>
<?php
// Commentaire sur une seul ligne
/* Commentaire sur plusieurs lignes */
# Autre syntaxe de commmentaite sur une seul ligne.
?>