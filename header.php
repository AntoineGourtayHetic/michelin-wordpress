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
        <a href="<?php echo home_url();?>" class="brand-logo center"><img src="<?php bloginfo('template_url'); ?>/build/img/logo.png" alt="michelin_logo" width="200px" /></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="dons.php">Dons</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
