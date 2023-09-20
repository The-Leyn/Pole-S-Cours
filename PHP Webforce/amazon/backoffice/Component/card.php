<div class="col mb-5">
    <div class="card h-100">
        <!-- Sale badge-->
        <?php if (!empty($key['discount'])) { ?>
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale -<?php echo $key['discount'] ?>%</div>
        <?php } ?>
        <!-- Product image-->
        <img class="card-img-top" src="backoffice/img/uploads/<?php echo $key['image'] ?>" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php echo $key['title'] ?></h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                </div>
                <?php  ?>
                <!-- Product price-->
                <span class="<?php if (!empty($key['discount'])) {
                                    echo "text-decoration-line-through text-muted";
                                } ?>"><?php echo $key['price'] ?>€</span>
                <?php if (!empty($key['discount'])) {
                    echo $key['price'] - $key['price'] * $key['discount'] / 100 . '€';
                } ?>

            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center d-block">
                <a class="btn btn-outline-success mt-auto" href="./single_article/index.php?id_product=<?php echo $key['id_product'] ?>">View product</a>
                <a class="btn btn-outline-dark mt-2" href="#">Add to cart</a>
            </div>
        </div>
    </div>
</div>