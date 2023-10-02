<?php

$selectArticle = $db->prepare("SELECT * FROM `article`");

$selectArticle->execute();

$articles = $selectArticle->fetchAll(PDO::FETCH_ASSOC);

print_r($articles);
