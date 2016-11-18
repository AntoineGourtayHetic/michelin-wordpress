<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<section>
<iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.3869826923396!2d3.0922248154819245!3d45.78347437910591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f71be3248c8fb5%3A0x7edeab25bf1cb320!2s23+Place+des+Carmes+Dechaux%2C+63000+Clermont-Ferrand!5e0!3m2!1sfr!2sfr!4v1479389946195" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php
// boucle WordPress
if (have_posts()){
    while (have_posts()){
        the_post();
?>

            <h2><?php the_title(); ?></h2>
						<div class="row">
							<div class="col s12 m6">
									<?php echo do_shortcode('[contact-form-7 id="216" title="Formulaire de contact 1"]'); ?>
							</div>
							<div class="col s12 m6">
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
