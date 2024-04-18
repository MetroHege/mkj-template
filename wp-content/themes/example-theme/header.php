<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="page-header">
        <div class="header-top-left">
            <?php the_custom_logo(); ?>
            <div class="logo"></div>
        </div>
        <div class="header-top-right">
            <?php wp_nav_menu(['container' => 'nav', 'theme_location' => 'main-menu']); ?>
        </div>
    </header>
    <div class="container">

    <section class="breadcrumbs">
        <?php if ( function_exists('bcn_display') ) {
            bcn_display();
        } ?>
    </section>