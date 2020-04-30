<?php

function printPoster() {
   echo  '<h4>Hej hej hej</h4>';
}

//add_action('homepage', 'printPoster');
?>

<?php

function public_store_post_types() {
   // Store Post Type
   register_post_type('store', array(
      'supports' => array('title', 'editor', 'excerpt'), // 'custom-fields'
      'rewrite' => array('slug' => 'stores'),
      'public' => true,
      'has_archive' => true,
      'labels' => array(
          'name' => 'Stores',
          'add_new_item' => 'Add New Store',
          'edit_item' => 'Edit Store',
          'all_items' => 'All Stores',
          'singular_name' => 'Store',
          /* 'show_in_rest' => 'true', */
      ),
      'menu_icon' => 'dashicons-location-alt'
  ));
}


add_action('init', 'public_store_post_types');
?>