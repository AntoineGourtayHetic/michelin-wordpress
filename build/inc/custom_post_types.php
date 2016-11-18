<?php
add_action('init', create_post_type_profil);
function create_post_type_profil() {
  $post_type = 'promesse';
  $labels = array(
      'name'               => 'Promesses',
      'singular_name'      => 'Promesse',
      'all_items'          => 'Toutes les promesses',
      'add_new'            => 'Ajouter une promesse',
      'add_new_item'       => 'Ajouter une nouvelle promesse',
      'edit_item'          => "Modifier la promesse",
      'new_item'           => 'Nouvelle promesse',
      'view_item'          => "Voir la promesse",
      'search_items'       => 'Chercher une promesse',
      'not_found'          => 'Pas de résultat',
      'not_found_in_trash' => 'Pas de résultat',
      'parent_item_colon'  => 'Promesse : ',
      'menu_name'          => 'Promesses',
  );

  $args = array(
      'labels'              => $labels,
      'hierarchical'        => false,
      'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments' ),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 1,
      'menu_icon'           => 'dashicons-megaphone',
      'show_in_nav_menus'   => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'has_archive'         => false,
      'query_var'           => true,
      'can_export'          => true,
      'rewrite'             => array( 'slug' => $post_type ),

  );
  ##On enregistre le post type
  register_post_type($post_type, $args );
}
 ?>
