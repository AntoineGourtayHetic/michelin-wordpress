<?php get_header(); ?>
<section id="cd-timeline">
<?php
// boucle WordPress
if (have_posts()){
    while (have_posts()){
        the_post();
?>
    <!-- <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
            <img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <!-- <div class="cd-timeline-content">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="cd-read-more">Read more</a>
            <span class="cd-date"><?php the_time('d/m/Y'); ?></span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block --> --> -->
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
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone2.jpg"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone2.jpg"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone3.jpg"></div>
        </div>
        <div class="navslide">
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone1.jpg" style="padding:0 10px;"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone2.jpg" style="padding:0 10px;"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone3.jpg" style="padding:0 10px;"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
