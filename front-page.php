<?php get_header(); ?>
<section class="row blog_articles">
<?
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
    <a href="<?php the_permalink(); ?>" class="article col s12 l4">
        <h4><?php the_title(); ?></h4>
    </a>
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



    <div class="row">
  <form class="col s12">
    <div class="row">
        <h3>Receive our latest news !</h3>
      <div class="input-field col s12">
        <input id="email" type="email" class="validate">
        <label for="email" data-error="wrong" data-success="right">Email</label>
      </div>
    </div>
  </form>
</div>


<div class="row">
    <div class="col l6 m6">
        <div class="cuteslide">
            <div class="slide"><img class="slide" src="<?php bloginfo('template_url'); ?>/build/img/bibendum.jpg"></div>
            <div class="slide"><img class="slide" src="<?php bloginfo('template_url'); ?>/build/img/logo.png"></div>
            <div class="slide"><img class="slide" src="<?php bloginfo('template_url'); ?>/build/img/bib_hor.jpg"></div>
        </div>
        <div class="navslide">
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/bibendum.jpg" style="padding:0 10px;"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/logo.png" style="padding:0 10px;"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/bib_hor.jpg" style="padding:0 10px;"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
