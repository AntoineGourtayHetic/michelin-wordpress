<?php get_header();?>
	<div class="row">
<?
$query = new WP_Query( array (
	'post_type' => 'actualite',
	'posts_per_page' => 4,
	'orderby' => 'date',
	'order' => 'DESC',
));
	if ($query->have_posts()){
			while ($query->have_posts()){
					$query->the_post();
	?>
					<div class="col s12 m12 l4">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="card">
							<div class="card-image">
								<?if(has_post_thumbnail()){
									?><img src="<?php the_post_thumbnail_url("thumbnail_articles")?>"><?
							}
							else{
								?><img src="<?php bloginfo('template_url'); ?>/build/img/bib_hor.jpg"><?
							}
							?>
							</div>
							<div class="card-content">
								<p><? the_title() ?></p>
							</div>
						</div>
						</a>
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

</div>



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

<?php get_footer(); ?>
