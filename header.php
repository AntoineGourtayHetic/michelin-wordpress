<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
				 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<header id="header">
	    <nav>
	        <div class="nav-wrapper">
	        <div class="donate"><?php echo do_shortcode( '[paypal_donation_button]' ); ?></div>
	        <a href="<?php echo home_url();?>" class="left logo"><img src="<?php bloginfo('template_url'); ?>/build/img/logo.svg" alt="michelin_logo" width="34px" /><span class="year">2017</span></a>
	            <ul id="nav-mobile" class="left">
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
		</header>

    <div class="container">
