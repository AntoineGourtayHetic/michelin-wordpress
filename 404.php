<?php get_header() ?>
<?php if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1>ERREUR 404</h1>
            <p>Vous êtes perdus ? Retournez sur la <a href="<?php echo home_url() ?>">page d'accueil</a> </p>
    <?php
        }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
?>
<?php get_footer() ?>
