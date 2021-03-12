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
