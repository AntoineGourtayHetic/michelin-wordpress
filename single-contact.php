<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3531066821515!2d2.4185486155927314!3d48.85147667928686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67283047127a9%3A0x5a597564e51389ac!2sHETIC!5e0!3m2!1sen!2sfr!4v1478776732877" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php
// boucle WordPress
if (have_posts()){
    while (have_posts()){
        the_post();
?>

            <h2><?php the_title(); ?></h2>
						<div class="row">
							<div class="col s6">
									<?php echo do_shortcode(get_option('contact_form')); ?>
							</div>
							<div class="col s6">
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
