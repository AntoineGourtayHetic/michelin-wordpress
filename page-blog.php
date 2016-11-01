<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
<?php get_header();
$query = new WP_Query( array (
	'post_type' => 'actualite',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'order' => 'DESC',
));
	if ($query->have_posts()){
			while ($query->have_posts()){
					$query->the_post();

?>
<!--@TODO: Voir pourl'aternance des box (Gauche / Droite) -->
	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<!--@TODO : Voir avec Luca pour le pictogramme -->
			<div class="cd-timeline-img cd-picture">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><?php the_title(); ?></h2>
				<p><?php the_field('chapeau'); ?></p>
				<a href="#0" class="cd-read-more">Lire plus</a>
				<span class="cd-date">Feb 10</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	</section> <!-- cd-timeline -->


<?php
}
}

get_footer(); ?>
