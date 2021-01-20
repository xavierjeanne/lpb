<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php
    // ENQUEUE your css and js in inc/enqueues.php
    wp_head();
    ?>
</head>

<body <?php echo body_class(); ?>>

    <div class="container-fluid p-0">
        <header role="banner">
            <nav class="navbar navbar-expand-xl pt-3 pb-3 ">
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png" alt="Les Petites Bouches" class="logo-img" /><span class="d-none d-md-inline-block ml-3">Les Petites Bouches</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!--<span class="navbar-toggler-icon"></span>-->
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse ml-auto justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav" id="menu-header">
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="#presentation">Présentation</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="#plat">Plats</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="#avis">Avis</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="header_main">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 resa p-4">
                        <h1 class="pb-5">Bienvenue au restaurant les petites bouches</h1>
                        <p><a href="tel:+33983304530">Réservation par téléphone</a></p>
                    </div>
                </div>
            </div>
        </div>
        <section id="content" role="main">