<?php

/* Fire our meta box setup function on the book editor screen. */
add_action( 'load-post.php', 'wb_book_meta_boxes_setup' );
add_action( 'load-post-new.php', 'wb_book_meta_boxes_setup' );

/* Meta box setup function. */
function wb_book_meta_boxes_setup() {
    /* Add meta boxes on the 'add_meta_boxes' hook. */
    add_action( 'add_meta_boxes', 'wb_add_book_meta_boxes' );
}

function wb_add_book_meta_boxes() {
    add_meta_box(
        'wb-about-book',                           // Unique ID
        esc_html__( 'About Book', 'example' ),     // Title
        'wb_about_book_meta_box',                  // Callback function
        'book',                                   // post type
        'side',                                   // Context
        'default'                                 // Priority
    );
}

/* Display the book meta box. */
function wb_about_book_meta_box( $post ) { ?>

    <?php wp_nonce_field( basename( __FILE__ ), 'wb_about_book_nonce' ); ?>
  
    <p>
      <label for="wb-book-author"><?php _e( "Author Name", 'wb_domain' ); ?></label>
      <br />
      <input class="widefat" type="text" name="wb-book-author" id="wb-book-author" value="<?php echo esc_attr( get_post_meta( $post->ID, 'wb_book_author', true ) ); ?>" size="30" />
    </p>
    <p>
      <label for="wb-book-price"><?php _e("Price", 'wb_domain' ); ?></label>
      <br />
      <input class="widefat" type="text" name="wb-book-price" id="wb-book-price" value="<?php echo esc_attr( get_post_meta( $post->ID, 'wb_book_price', true ) ); ?>" size="30" />
    </p>
    <p>
      <label for="wb-book-publisher"><?php _e( "Publisher", 'wb_domain' ); ?></label>
      <br />
      <input class="widefat" type="text" name="wb-book-publisher" id="wb-book-publisher" value="<?php echo esc_attr( get_post_meta( $post->ID, 'wb_book_publisher', true ) ); ?>" size="30" />
    </p>
    <p>
      <label for="wb-book-year"><?php _e( "Year", 'wb_domain' ); ?></label>
      <br />
      <input class="widefat" type="text" name="wb-book-year" id="wb-book-year" value="<?php echo esc_attr( get_post_meta( $post->ID, 'wb_book_year', true ) ); ?>" size="30" />
    </p>
    <p>
      <label for="wb-book-edition"><?php _e( "Edition", 'wb_domain' ); ?></label>
      <br />
      <input class="widefat" type="text" name="wb-book-edition" id="wb-book-edition" value="<?php echo esc_attr( get_post_meta( $post->ID, 'wb_book_edition', true ) ); ?>" size="30" />
    </p>
  <?php 
  }
?>

