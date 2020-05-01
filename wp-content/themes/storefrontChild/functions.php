<?php

function printPoster()
{
   echo  '<h4>Hej hej hej</h4>';
}

//add_action('homepage', 'printPoster');
?>

<?php

function public_store_post_types()
{
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

function poster_features() {
   add_image_size('map', 300, 260, true);
   /* add_theme_support('post-thumbnails'); */
}

add_action('after_setup_theme', 'poster_features');


/* function shop_files()
{
   wp_enqueue_script('googleMap.js', get_theme_file_uri('/js/GoogleMap.js'), NULL, '1.0', true);
   wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'shop_files');

function posterShopMapKey($api)
{
   $api['key'] = "";
   return $api;
}

add_filter('acf/fields/google_map/api', 'posterShopMapKey');
?> */