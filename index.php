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
</div> <!-- /content -->

<?php get_footer(); ?>
