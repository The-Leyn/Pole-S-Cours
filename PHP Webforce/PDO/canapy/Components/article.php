<!-- Start Column 1 -->
<?php foreach ($articles as $key) { ?>

    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="./single_article.php?idArticle=<?php echo $key['id_article'] ?>">
            <img src="images/uploads/<?php echo $key['image']; ?>" class="img-fluid product-thumbnail">
            <h3 class="product-title"><?php echo $key['title']; ?></h3>
            <strong class="product-price"><?php echo $key['price']; ?>€</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
    </div>
<?php } ?>
<!-- End Column 1 -->