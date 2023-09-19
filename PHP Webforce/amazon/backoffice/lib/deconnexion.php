<?php
session_start(); // Si l'oin veut manipuler la session on doit l'apeller
session_unset(); // unset va vider la variable session
session_destroy(); // va détruire la variable $_SESSION et du coup la session elle même
header('Location: ../index.php'); // Petite redirection vers la page index du site
