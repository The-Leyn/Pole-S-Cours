<?php
if (!empty($_POST)) {
    extract($_POST);
    print_r($_FILES);
    $image = $_FILES['imgArticle']['name'];
    $imageTmp = $_FILES['imgArticle']['tmp_name'];
    echo $image;
    if (!empty($titleArticle) && !empty($priceArticle) && !empty($_FILES)) {

        $insertArticle = $db->prepare('INSERT INTO article (`title`,`price`,`image`) values (:title, :price, :image)');

        $insertArticle->bindParam(':title', $titleArticle);
        $insertArticle->bindParam(':price', $priceArticle);
        $insertArticle->bindParam(':image', $image);

        $insertArticle->execute();
        move_uploaded_file($imageTmp, "./images/uploads/$image");
    }
}
