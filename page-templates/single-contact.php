<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<section>
<iframe width="100%" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EjsyMyBQbGFjZSBkZXMgQ2FybWVzIERlY2hhdXgsIDYzMDAwIENsZXJtb250LUZlcnJhbmQsIEZyYW5jZQ&key=AIzaSyAme2CIVxtDe1NXGWKzOSfJNnVf9jUjasQ" allowfullscreen></iframe>
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
