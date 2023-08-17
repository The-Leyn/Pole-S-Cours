<!-- le passage php : < ?php, permet d'entrer du code php sur une page HTML-->
<?php

// PDO est une surcouche de PHP, directement intégrée à ce dernier depuis PHP version 5.1.

// PDO permet de connecter notre projet à sa base de données, puis de mêler langage php avec des requetes en sql

// PDO= PHP Data Object, c'est une extension definissant l'interface pour accéder à une base de données avec PHP. Elle est orientée objet.

// la connexion avec la base de données va être différente en fonction de l'hébergeur. Dans notre cas notre base de données est en local.


// $pdo = new PDO('mysql:host=localhost; dbname=haribo', 'root', ''); Cela crée une nouvelle instance PDO en se connectant à une base de données MySQL sur le serveur localhost avec le nom de la base de données haribo. Les identifiants d'utilisateur et de mot de passe (root et '' dans cet exemple) sont également fournis.

/* array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
)
*/

/* Ici un tableau associatif d'options à PDO lors de sa création. Deux options sont spécifiées :

PDO::ATTR_ERRMODE est défini sur PDO::ERRMODE_WARNING, ce qui signifie que les erreurs seront gérées en affichant des alertes de type "warning".
PDO::MYSQL_ATTR_INIT_COMMAND est défini sur 'SET NAMES utf8', ce qui indique que la commande MySQL pour l'initialisation de la connexion sera SET NAMES utf8. Cela permet de définir le jeu de caractères de la connexion sur UTF-8 pour prendre en charge des caractères spéciaux.*/
$pdo = new PDO('mysql:host=localhost; dbname=haribo', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

echo "<pre>";
print_r(get_class_methods($pdo)); // va afficher la liste des méthodes publiques disponibles dans la classe PDO, c'est-à-dire les méthodes que vous pouvez appeler sur l'objet $pdo pour interagir avec la base de données.
echo "</pre>";

$req = $bdd->prepare('SELECT * FROM bonbon');
