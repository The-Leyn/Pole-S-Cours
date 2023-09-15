<?php

if (!empty($_POST)) {
    if (!empty($_POST["colorFirst"])) {

        $formTable = array(
            "colorHeader" => $_POST["colorFirst"],
            "colorText" => $_POST["colorSecond"],
            "productImg" => $_FILES["image"]['name'],
            "productTitle" => $_POST["title"],
            "productText" => $_POST["text"],
            "productPrice" => $_POST["price"]
        );
        // echo print_r($formTable);

        $jsonFormTable = json_encode($formTable);

        file_put_contents('admin/donnees.json', $jsonFormTable);

        $jsonData = file_get_contents('admin/donnees.json');
        $decodeFormTable = json_decode($jsonData, true);
        // echo $decodeFormTable['colorHeader'];

        $uploadImage = "./assets/images/";

        $uploadFile = $uploadImage . $_FILES['image']['name'];

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Fichier valide, succes";
        } else {
            echo "Attention erreur";
        }
    }
}
// print_r($decodeFormTable);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <style>
        form {
            width: 400px;
            margin: auto;
        }
    </style>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class=" py-5" style="background-color: <?php
                                                    //  echo $decodeFormTable['colorHeader']; 
                                                    if (!empty($decodeFormTable['colorHeader'])) {
                                                        echo $decodeFormTable['colorHeader'];
                                                    } else {
                                                        echo "#9AC2C5";
                                                    }
                                                    ?>!important;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white" style="color: <?php
                                                                if (!empty($decodeFormTable['colorText'])) {
                                                                    echo $decodeFormTable['colorText'];
                                                                } else {
                                                                    echo "#ffffff";
                                                                }
                                                                // echo $decodeFormTable['colorText']; 
                                                                ?>!important;">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5" style="display:flex;">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputColor">Couleur du Bandeau</label>
                    <input type="color" class="form-control" id="exampleInputColor" name="colorFirst">
                </div>

                <div class="form-group">
                    <label for="exampleInputColorTxt">Couleur du Texte</label>
                    <input type="color" class="form-control" id="exampleInputColorTxt" name="colorSecond">
                </div>

                <div class="form-group">
                    <label for="exampleInputimg">Image du produit</label>
                    <input type="file" class="form-control" id="exampleInputimg" name="image">
                </div>

                <div class="form-group">
                    <label for="exampleInputTxt1">Titre du produit</label>
                    <input type="text" class="form-control" id="exampleInputTxt1" name="title">
                </div>

                <div class="form-group">
                    <label for="exampleInputTxt2">Texte du produit</label>
                    <input type="text" class="form-control" id="exampleInputTxt2" name="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputTxt2">Prix</label>
                    <input type="Number" class="form-control" id="exampleInputTxt2" name="price">
                </div>

                <input type="submit" class="btn btn-primary" value="Envoyer">
            </form>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5" style="width: 400px;">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php
                                                        if (!empty($decodeFormTable['productImg'])) {
                                                            echo "assets/images/" . $decodeFormTable['productImg'];
                                                        } else {
                                                            echo "https://dummyimage.com/450x300/dee2e6/6c757d.jpg";
                                                        }
                                                        //  echo $decodeFormTable['productImg']; 
                                                        ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php
                                                        if (!empty($decodeFormTable['productTitle'])) {
                                                            echo $decodeFormTable['productTitle'];
                                                        } else {
                                                            echo "Titre du produit";
                                                        }
                                                        // echo $decodeFormTable['productTitle'];
                                                        ?></h5>
                                <!-- Product reviews-->
                                <h4 class="fw-bolder"><?php
                                                        if (!empty($decodeFormTable['productText'])) {
                                                            echo $decodeFormTable['productText'];
                                                        } else {
                                                            echo "Description du produit";
                                                        }
                                                        //  echo $decodeFormTable['productText']; 
                                                        ?></h4>

                                <!-- Product price-->
                                <span><?php
                                        if (!empty($decodeFormTable['productPrice'])) {
                                            echo $decodeFormTable['productPrice'];
                                        } else {
                                            echo "Prix du produit";
                                        }
                                        //  echo $decodeFormTable['productPrice']; 
                                        ?> €</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website <?php echo date("Y"); ?></p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>