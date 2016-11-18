<?php
/*
Template Name: Page de contenu flexible
*/
get_header(); //appel du template header.php  ?>
<?php
// check if the flexible content field has rows of d<?php
/*
Template Name: Page de contenu flexible
*/
get_header(); //appel du template header.php  ?>
<?php
// check if the flexible content field has rows of data
if( have_rows('flexible-content-actualite') )
{
     // loop through the rows of data
    while ( have_rows('flexible-content-actualite') )
    {
      the_row();
      $layout=get_row_layout();
      include get_template_directory().'/build/views/flexible/'.$layout.'.php';
    }
}
?>

<?php get_footer(); ?>
