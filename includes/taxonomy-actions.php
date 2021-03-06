<?php
  
function wb_register_taxonomy_book() {
    $labels = array(
        'name'              => _x( 'Book Category', 'taxonomy general name' ),
        'singular_name'     => _x( 'Book', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Book Categories' ),
        'all_items'         => __( 'All Book Categories' ),
        'parent_item'       => __( 'Parent Book Category' ),
        'parent_item_colon' => __( 'Parent Book Category:' ),
        'edit_item'         => __( 'Edit Book Category' ),
        'update_item'       => __( 'Update Book Category' ),
        'add_new_item'      => __( 'Add New Book Category' ),
        'new_item_name'     => __( 'New Book Category Name' ),
        'menu_name'         => __( 'Book' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,    //required to see taxonomy in ui
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'book' ],
    );
    register_taxonomy( 'book', [ 'book' ], $args );
}
add_action( 'init', 'wb_register_taxonomy_book',0);

 
function wb_nonhierarchical_taxonomy_book() {
  
  $labels = array(
    'name' => _x( 'Book Tag', 'taxonomy general name' ),
    'singular_name' => _x( 'Book Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Book Tag' ),
    'popular_items' => __( 'Popular Book Tags' ),
    'all_items' => __( 'All Book Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Book Tag' ), 
    'update_item' => __( 'Update Book Tag' ),
    'add_new_item' => __( 'Add New Book Tag' ),
    'new_item_name' => __( 'New Book Tag' ),
    'separate_items_with_commas' => __( 'Separate book tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove book tags' ),
    'choose_from_most_used' => __( 'Choose from the most used book tags' ),
    'menu_name' => __( 'Book Tags' ),
  ); 
 
  register_taxonomy('book tags','book',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'book-tag' ),
  ));
}

add_action( 'init', 'wb_nonhierarchical_taxonomy_book', 0 );
