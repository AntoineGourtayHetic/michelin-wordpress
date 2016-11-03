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
								<?php the_content(); ?>
							</div>
						</div>
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
