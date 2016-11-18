<?php get_header() ?>
    <div class="row">

<?php $query = new WP_Query( array (
	'post_type' => 'promesse',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC',
));
	?>
<?php if ($query->have_posts()){
        while ($query->have_posts()){
            $query->the_post();
    ?>
        <div class="col s12 l12">
          <div class="card">
            <div class="card-panel" style="width:100%!important;">
              <span class="card-title" style="font-weight:400;font-size:25px;"><?php the_title(); ?></span>
                <p class="content-promesse"><?php the_content(); ?></p>
            </div>
          </div>
        </div>

    <?php
        }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    } ?>
</div>
<?php get_footer() ?>
