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
        <div class="right"><?php echo do_shortcode( '[paypal_donation_button]' ); ?></div>
        <a href="<?php echo home_url();?>" class="left logo"><img src="<?php bloginfo('template_url'); ?>/build/img/logo.svg" alt="michelin_logo" width="40px" /><span>2017</span></a>
            <ul id="nav-mobile" class="left hide-on-small-and-down">
                <?php $args=array(
                  'theme_location' => 'header', // nom du slug
                  'menu' => 'header_fr', // nom à donner cette occurence du menu
                  'menu_class' => 'menu_header', // class à attribuer au menu
                  'menu_id' => 'menu_id', // id à attribuer au menu
                  // voir les autres arguments possibles sur le codex
                  );
                  wp_nav_menu($args); ?>
            </ul>
        </div>
    </nav>

    <div class="container">
