<?php
$current_page = basename($_SERVER['PHP_SELF']);

$nav_links = [
    'index.php' => 'Home',
    'shop.php' => 'Shop',
    'creation.php' => 'Creation',
    'about.php' => 'About us',
    'services.php' => 'Services',
    'blog.php' => 'Blog',
    'contact.php' => 'Contact us',
];

?>

<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <?php foreach ($nav_links as $link => $label) : ?>
                    <li class="nav-item <?php if ($current_page == $link) echo 'active'; ?>">
                        <a class="nav-link" href="<?php echo $link; ?>"><?php echo $label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
            </ul>
        </div>
    </div>

</nav>