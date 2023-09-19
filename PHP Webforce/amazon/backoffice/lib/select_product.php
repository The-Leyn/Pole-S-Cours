<?php

$sqlSelectProduct = "SELECT * FROM `product` INNER JOIN `user`ON product.id_user = user.id_user";

$tableSelectProduct = mysqli_query($connexion, $sqlSelectProduct);

// print_r($tableSelectProduct);

$product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);


// print_r($product);
