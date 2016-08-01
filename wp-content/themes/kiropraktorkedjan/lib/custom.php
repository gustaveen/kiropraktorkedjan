<?php

function custom_post_symptoms() {
  $labels = array(
    'name'               => _x( 'Besvär & smärtor', 'post type general name' ),
    'singular_name'      => _x( 'Besvär', 'post type singular name' ),
    'add_new'            => _x( 'Lägg till Besvär', 'besvär' ),
    'add_new_item'       => __( 'Lägg till nytt besvär' ),
    'edit_item'          => __( 'Rediger Besvär' ),
    'new_item'           => __( 'Nytt Besvär' ),
    'all_items'          => __( 'Alla Besvär' ),
    'view_item'          => __( 'Visa Besvär' ),
    'search_items'       => __( 'Sök Besvär' ),
    'not_found'          => __( 'Inga besvär funna' ),
    'not_found_in_trash' => __( 'Inga besvär funna i papperskorgen' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Besvär & smärtor'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Här lägger ni till nya besvär och redigerar befinntliga',
    'public'        => true,
    'menu_position' => 8,
    'supports'      => array( 'title', 'author', 'editor', 'thumbnail' ),
    'has_archive'   => false,
  );
  register_post_type( 'symptoms', $args ); 
}
add_action( 'init', 'custom_post_symptoms' );

function my_taxonomies_symptoms() {
  $labels = array(
    'name'              => _x( 'Kategorier', 'taxonomy general name' ),
    'singular_name'     => _x( 'Besvärsategori', 'taxonomy singular name' ),
    'search_items'      => __( 'Sök besvärskategori' ),
    'all_items'         => __( 'Alla besvärskategorier' ),
    'parent_item'       => __( 'Förälder besvärskategori' ),
    'parent_item_colon' => __( 'Förälder besvärskategori:' ),
    'edit_item'         => __( 'Redigera besvärskategori' ), 
    'update_item'       => __( 'Uppdatera besvärskategori' ),
    'add_new_item'      => __( 'Lägg till ny besvärskategori' ),
    'new_item_name'     => __( 'Ny besvärskategori' ),
    'menu_name'         => __( 'Besvärskategorier' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'show_ui' => true,
    'show_admin_column' => true
  );
  register_taxonomy( 'symptoms_category', 'symptoms', $args );
}
add_action( 'init', 'my_taxonomies_symptoms', 0 );


function change_post_object_label() {
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Nyheter';
    $labels->singular_name = 'Nyhet';
    $labels->add_new = 'Lägg till Nyhet';
    $labels->add_new_item = 'Lägg till ny nyhet';
    $labels->edit_item = 'Rediger Nyhet';
    $labels->new_item = 'Ny Nyhet';
    $labels->view_item = 'Visa Nyhet';
    $labels->search_items = 'Sök Nyhet';
    $labels->not_found = 'Inga nyheter funna';
    $labels->not_found_in_trash = 'Inga nyheter funna i papperskorgen';
}
add_action( 'admin_menu', 'change_post_object_label' );


function owc_excerpt( $limit = 20, $inloop = true, $post_object = "") {
  global $post;

  if (!$inloop) {
      $post = $post_object;
      setup_postdata( $post );
  }  

  $excerpt = explode( ' ', get_the_excerpt(), $limit );
  $count = count($excerpt); 

  if ( count( $excerpt ) >= $limit ) {
    array_pop( $excerpt );
    $excerpt = implode( " ", $excerpt ) . '...';
  } else {
    $excerpt = implode( " ", $excerpt );
  } 
  $excerpt = preg_replace( '`\[[^\]]*\]`', '', $excerpt );

  if (!$inloop) {
    wp_reset_postdata();
  }

  return $excerpt;
}


