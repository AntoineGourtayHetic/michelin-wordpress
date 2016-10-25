<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <nav>
        <div class="nav-wrapper">
        <a href="index.php" class="brand-logo center">Michelin 2017</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html">Dons</a></li>
                <li><a href="badges.html">Popo</a></li>
                <li><a href="collapsible.html">Pourquoi lui</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
