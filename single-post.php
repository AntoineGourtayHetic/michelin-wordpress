<?php get_header();

if (have_posts()){
    while (have_posts()){
        the_post();

    ?>
        <h1><?php the_title(); ?></h1>
        <h4><?php the_field('article-chapeau'); ?></h4>
				<div class="row">
					<h5 class="col s12"><?php the_field('sous-titre_1') ?></h5>
					<?php
					if(!empty(get_field('image_1'))){
						$noimage1 = "m6";
					} else {
						$noimage1 = "";
					}
					if(!empty(get_field('paragraphe_1'))){
						$noparagraphe1 = "m6";
					} else {
						$noparagraphe1 = "";
						$style1 ="style=\"text-align:center\";";
					}
					?><div class="col s12 <?php echo $noimage1 ?>"><?php the_field('paragraphe_1') ?></div>
					<div class="col s12 <?php echo $noparagraphe1 ?>" <?php echo $style1 ?>>
						<?php if( get_field('image_1') ): ?>
							<img src="<?php the_field('image_1'); ?>" />
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<h5 class="col s12"><?php the_field('sous-titre_2') ?></h5>
					<?php
					if( !empty(get_field('image_2')) ){
						$noimage2 = "m6";
					} else {
						$noimage2 = "";
					}
					if(!empty(get_field('paragraphe_2'))){
						$noparagraphe2 = "m6";
					} else {
						$noparagraphe2 = "";
						$style2 ="style=\"text-align:center\";";
					}
					?><div class="col s12 <?php echo $noparagraphe1 ?>" <?php echo $style1 ?>>
						<?php if( get_field('image_2') ): ?>
							<img src="<?php the_field('image_2'); ?>" />
						<?php endif; ?>
					</div>
					<div class="col s12 <?php echo $noimage2 ?>"><?php the_field('paragraphe_2') ?></div>
				</div>
				<div class="row">
					<h5 class="col s12"><?php the_field('sous-titre_3') ?></h5>
					<?php
					if( !empty(get_field('image_3')) ){
						$noimage3 = "m6";
					} else {
						$noimage3 = "";
					}
					if(!empty(get_field('paragraphe_3'))){
						$noparagraphe3 = "m6";
					} else {
						$noparagraphe3 = "";
						$style3 ="style=\"text-align:center\";";
					}
					?><div class="col s12 <?php echo $noimage3 ?>"><?php the_field('paragraphe_3') ?></div>
					<div class="col s12 <?php echo $noparagraphe1 ?>" <?php echo $style1 ?>>
						<?php if( get_field('image_3') ): ?>
							<img src="<?php the_field('image_3'); ?>" />
						<?php endif; ?>
					</div>
				</div>
				<p class="posted">Posté le <?php the_time('j F Y') ?></p>
    <?php
    }
} else {
?>
Nous n'avons pas trouvé d'article répondant à votre recherche
<?php
}
?>

<?php get_footer(); ?>
