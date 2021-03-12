<?php

function wb_custom_post_type() {
    register_post_type('book',
        array(
            'labels'      => array(
                'name'          => __( 'Books', 'textdomain' ),
                'singular_name' => __( 'Book', 'textdomain' ),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array( 'slug' => 'book' ), 
        )
    );
}
add_action('init', 'wb_custom_post_type');

  
function wb_register_taxonomy_book() {
    $labels = array(
        'name'              => _x( 'Book Category', 'taxonomy general name' ),
        'singular_name'     => _x( 'Book', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Books' ),
        'all_items'         => __( 'All Books' ),
        'parent_item'       => __( 'Parent Book' ),
        'parent_item_colon' => __( 'Parent Book:' ),
        'edit_item'         => __( 'Edit Book' ),
        'update_item'       => __( 'Update Book' ),
        'add_new_item'      => __( 'Add New Book' ),
        'new_item_name'     => __( 'New Book Name' ),
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
