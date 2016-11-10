<?php
add_action('wp_ajax_nopriv_filtre-category','filtre_category_function');

add_action('wp_ajax_autocompletion','autocompletion_function');
add_action('wp_ajax_nopriv_autocompletion','autocompletion_function');
function autocompletion_function()
{
  global $wpdb, $_POST;

  $search_input = $_POST['search_input'];
  include  get_template_directory().'/build/views/ajax-search-result.php';

  die();
}
