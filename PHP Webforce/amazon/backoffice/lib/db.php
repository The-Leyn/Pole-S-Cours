<?php
$loginDB = "root";
$passwordDB = "";
$dbname = "afs";
$servername = "localhost";

$connexion = mysqli_connect($servername, $loginDB, $passwordDB, $dbname);

// if ($connexion) {
//     echo "Connexion réussi";
// } else {
//     echo "Echec de connexion";
// }

// Créer une connexion
// $conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
// if ($conn->connect_error) {
//     die("La connexion a échoué : " . $conn->connect_error);
// }
