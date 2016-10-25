<?php get_header(); ?>
<div id="content">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
        <div class="post">
            <?if (is_single()){?>
                <a href="javascript:history.go(-1)" class="back"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour</a><?
            }?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_content(); ?></p>
            <p class="postmetadata">Posté le <?php the_time('d/m/Y'); ?></p>
            <p class="category"><?php the_category(', '); ?></p>
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


<!-- <div class="row">
    <div class="col l12 m12">
        <div class="cuteslide">
            <div><img src="</?php bloginfo('template_url'); ?>/assets/imgs/drone1.jpg"></div>
            <div><img src="</?php bloginfo('template_url'); ?>/assets/imgs/drone2.jpg"></div>
            <div><img src="</?php bloginfo('template_url'); ?>/assets/imgs/drone3.jpg"></div>
        </div>
        <div class="navslide">
            <div><img src="</?php bloginfo('template_url'); ?>/assets/imgs/drone1.jpg" style="padding:0 10px;"></div>
            <div><img src="</?php bloginfo('template_url'); ?>/assets/imgs/drone2.jpg" style="padding:0 10px;"></div>
            <div><img src="</?php bloginfo('template_url'); ?>/assets/imgs/drone3.jpg" style="padding:0 10px;"></div>
        </div>
    </div>
</div> -->

<?php get_footer(); ?>
