<?php
/**
 * Plugin Name: wp-book
 * Description: Organizes book records
 * Author: Vibhav Salelkar
 * Version: 1.0 
 * @return void
 */

 /**
  *  Global Variables
  */
  $wb_my_plugin_name = "WP-BOOK";

  /**
   * Includes
   */
  include('includes/scripts.php');         //This controls all js/css
  include('includes/display-functions.php'); //outputs content
  include('includes/admin-page.php');
  include('includes/post-actions.php');
  include('includes/taxonomy-actions.php');
  include('includes/meta-actions.php');