<?php
session_start();
// print_r($_SESSION);


require_once('backoffice/lib/db.php');
require_once('backoffice/lib/select_product.php');
// print_r($product);
// print_r($productStatePriceDesc);
extract($_POST);
if (isset($sortBy)) {
    if ($sortBy != 1 && $sortBy != 2 && $sortBy != 3) {
        // header("Location: ../../index.php");
        require_once('backoffice/lib/select_product.php');
    } else if ($sortBy == 1) {

        // Prix Décroissant
        $sqlSelectProductStatePriceDesc = "SELECT * FROM product WHERE product_state = 0 ORDER BY price DESC";
        $tableSelectProductStatePriceDesc = mysqli_query($connexion, $sqlSelectProductStatePriceDesc);
        $productStatePriceDesc = mysqli_fetch_all($tableSelectProductStatePriceDesc, MYSQLI_ASSOC);
        // print_r($productStatePriceDesc);
    } else if ($sortBy == 2) {

        // Prix Croissant
        $sqlSelectProductStatePriceAsc = "SELECT * FROM product WHERE product_state = 0 ORDER BY price ASC";
        $tableSelectProductStatePriceAsc = mysqli_query($connexion, $sqlSelectProductStatePriceAsc);
        $productStatePriceAsc = mysqli_fetch_all($tableSelectProductStatePriceAsc, MYSQLI_ASSOC);
        // print_r($productStatePriceAsc);

        // print_r($_POST);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MyShop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>



<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">MyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>

                <?php if (empty($_SESSION)) { ?>

                    <form class="d-flex" style="    margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="backoffice/login.php">
                            <i class="bi-box-arrow-in-right me-1"></i>
                            connexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/register.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            inscription
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } else { ?>

                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/lib/deconnexion.php">
                            <i class="bi bi-box-arrow-left"></i>
                            déconnexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } ?>

                <?php
                if (!empty($_SESSION)) {
                    # code...
                    if ($_SESSION['user_statut'] != 0) { ?>

                        <form class="d-flex" style="    margin-left: 10px;">
                            <a class="btn btn-outline-dark" href="backoffice/index.php">
                                <i class="bi bi-clipboard-data"></i>
                                Dashboard
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>


                <?php }
                } ?>



            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="d-flex justify-content-between">

                <form method="post" class="mb-4 col col-lg-3">
                    <div class="d-flex">
                        <select class="form-select " aria-label="Default select example" name="sortBy">
                            <option <?php if (!isset($productStatePriceDesc) && !isset($productStatePriceAsc)) {
                                        echo "selected";
                                    } ?> selected>Sort By</option>
                            <option <?php if (isset($productStatePriceDesc)) {
                                        echo "selected";
                                    } ?> value="1">Price : Hight-Low</option>
                            <option <?php if (isset($productStatePriceAsc)) {
                                        echo "selected";
                                    } ?> value="2">Price : Low-Hight</option>
                        </select>
                        <button class="btn btn-dark d-flex align-items-center" style="margin-left: 10px;">Filter<i class="bi bi-filter" style="margin-left: 10px;"></i></button>
                    </div>
                </form>
                <div>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-dark" for="btnradio1">All</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-dark" for="btnradio2">Games </label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-dark" for="btnradio3">Radio 3</label>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Boucles forEach -->
                <?php
                if (isset($productStatePriceDesc)) {
                    foreach ($productStatePriceDesc as $key) {
                        if ($key['product_state'] == 0) {
                            include('./backoffice/Component/card.php');
                        }
                    }
                } else if (isset($productStatePriceAsc)) {
                    foreach ($productStatePriceAsc as $key) {
                        if ($key['product_state'] == 0) {
                            include('./backoffice/Component/card.php');
                        }
                    }
                } else {
                    foreach ($product as $key) {
                        if ($key['product_state'] == 0) {
                            include('./backoffice/Component/card.php');
                        }
                    }
                } ?>
                <!-- FIN Boucles forEach -->
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>