<?php get_header();

if (have_posts()){
    while (have_posts()){
        the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <p class="posted">Posté le <?php the_time('j F Y') ?></p>
        <p><?php the_content(); ?></p>
    <?php
    }
}

get_footer(); ?>
