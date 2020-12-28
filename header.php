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
    <div class="container-fluid">
        <header id="header" role="banner" class="row">
            <nav class="navbar">
                <a class="navbar-brand ml-lg-5" href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png" alt="Les Petites Bouches" class="logo-img"/></a>
            </nav>
        </header>
        <section id="content" role="main">