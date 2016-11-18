<?php get_header();?>
<h1 class="title_home">Michelin Bibendum 2017 <br> - <br>Pour une France gonflée à bloc !</h1>
<img class="responsive-img img-home" src="http://hetic.michelinpresident.antoine-gourtay.fr/wp-content/uploads/2016/11/bibendum-michelin.png">
<h1 class="articles_home">Dernières actualités</h1>
<div class="divider"></div>
	<div class="row">
<?
$query = new WP_Query( array (
	'post_type' => 'post',
	'posts_per_page' => 3,
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
								<h5><? the_title() ?></h5>
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

<div class="divider"></div>

<h5 class="donate_home">Nous soutenir !</h5>
<?php echo do_shortcode( '[paypal_donation_button]' ); ?>

<!-- Slider woocommerce -->
<?php masterslider(2); ?>



<div class="divider" style="margin-top:70px"></div>

  <div class="row" style="padding-top:30px;">
  <form class="col s6">
    <div class="row">
        <h3><?php echo do_shortcode(get_option('newsletter_title')); ?></h3>
      	<?php echo do_shortcode(get_option('newsletter')); ?>
    </div>
  </form>
	<div class="col s6">
		<a class="twitter-timeline" data-width="500" data-height="600" href="https://twitter.com/Michelin">Tweets by Michelin</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>
</div>

<?php get_footer(); ?>

