<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

	<section id="cd-timeline" class="cd-container">
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
	    <div class="cd-timeline-block">
	        <div class="cd-timeline-img cd-picture">
	            <img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
	        </div> <!-- cd-timeline-img -->

	        <div class="cd-timeline-content">
	            <h2><?php the_title(); ?></h2>
	            <p><?php the_excerpt(); ?></p>
	            <a href="<?php the_permalink(); ?>" class="cd-read-more">Read more</a>
	            <span class="cd-date"><?php the_time('d/m/Y'); ?></span>
	        </div> <!-- cd-timeline-content -->
	    </div> <!-- cd-timeline-block -->
	<?php
	    }
	}
	else {
	?>
	Nous n'avons pas trouvé d'article répondant à votre recherche
	<?php
	}
	?>

	</section> <!-- cd-timeline -->

<?php get_footer(); ?>
