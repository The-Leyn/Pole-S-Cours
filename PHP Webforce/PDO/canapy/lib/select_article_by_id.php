<?php

$idArticle = $_GET['idArticle'];
$select = $db->prepare("SELECT * FROM `article` WHERE id_article = :idArticle");

$select->bindParam(':idArticle', $idArticle, PDO::PARAM_INT);
$select->execute();
$article = $select->fetch(PDO::FETCH_ASSOC); // Juste fetch() et pas fetchAll() car on affiche que un article.
print_r($article);
