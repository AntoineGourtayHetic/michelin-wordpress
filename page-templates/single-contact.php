<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<section>
<?php
// boucle WordPress
if (have_posts()){
    while (have_posts()){
        the_post();
?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <a href="<?php the_permalink(); ?>" class="cd-read-more">Read more</a>
            <span class="cd-date"><?php the_time('d/m/Y'); ?></span>
						<?php echo do_shortcode(); ?>
<?php
    }
}
else {
?>
Nous n'avons pas trouvé d'article répondant à votre recherche
<?php
}
?>
</section>

<?php get_footer(); ?>
