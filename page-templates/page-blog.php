<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<?php
get_template_part('/build/views/ajax-search');
 ?>
	<section id="cd-timeline" class="cd-container">
<?php
$query = new WP_Query( array (
	'post_type' => 'post',
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
              <?php $field = get_field_object('icone');
                    $value = $field['value'];
                    if ($value === 'Evenement'){ ?>
	            <img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-article.svg" alt="Picture">
              <?php }
              else if ($value === 'Photo'){?>
                <img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
              <? }
              else if ($value === 'Video'){?>
                <img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-movie.svg" alt="Picture">
              <? }
              else if ($value === 'Medias'){?>
                <img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-location.svg" alt="Picture">
              <? } ?>
	        </div> <!-- cd-timeline-img -->

          <div class="cd-timeline-content">
	            <h2><?php the_title(); ?></h2>

          <?php
              if(has_post_thumbnail())
              {
                echo '<div class="responsiveImage">';
                the_post_thumbnail("thumbnail_articles");
                echo '</div>';
              }
          ?>
              <p><?php the_field('article-chapeau') ?></p>
	            <a href="<?php the_permalink(); ?>" class="cd-read-more">Lire plus</a>
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
