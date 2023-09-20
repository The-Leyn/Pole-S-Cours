<?php
require_once('db.php');

extract($_GET);
echo $idProduct;

$sqlSelectProduct = "SELECT * FROM product WHERE id_product = $idProduct";

$tableSelectProduct = mysqli_query($connexion, $sqlSelectProduct);
$product = mysqli_fetch_assoc($tableSelectProduct);
print_r($product);
extract($product);
echo $product_state;

if ($product_state == 0) {
    $sqlUpdateProduct = "UPDATE `product` SET `product_state`= 1 WHERE id_product = $idProduct";

    if (mysqli_query($connexion, $sqlUpdateProduct)) {
        echo "Update Successfull";
        header("Location: ../index.php");
    } else {
        echo "Error Update";
    }
} else if ($product_state == 1) {
    $sqlUpdateProduct = "UPDATE `product` SET `product_state`= 0 WHERE id_product = $idProduct";

    if (mysqli_query($connexion, $sqlUpdateProduct)) {
        echo "Update Successfull";
        header("Location: ../index.php");
    } else {
        echo "Error Update";
    }
}
