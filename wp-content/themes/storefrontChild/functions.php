<?php

function printPoster()
{
   echo  '<h4>Hej hej hej</h4>';
}

//add_action('homepage', 'printPoster'); --> Exempel på deklarera, anropa funktion i specifik template. <--
?>

<?php

function public_store_post_types() // Deklarera och skapa ny Post Type (Store)
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

add_action('init', 'public_store_post_types'); // Anropa och publicera ny Post Type (Store)

function poster_features() {
   add_image_size('map', 800, 450, true);
   /* add_theme_support('post-thumbnails'); */
}

add_action('after_setup_theme', 'poster_features'); // Image style


function shop_files()
{
   wp_enqueue_script('googleMap.js', get_theme_file_uri('/js/GoogleMap.js'), NULL, '1.0', true);
   wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDVFCr8WjO758-TkJEosYh8EL37Labnn_U', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'shop_files'); // Anropar den deklarerade funktionen ovan som hämtar script (GoogleMap.js) och även länken till Google Maps key för API:et Google Map.

function posterShopMapKey($api)
{
   $api['key'] = "AIzaSyDVFCr8WjO758-TkJEosYh8EL37Labnn_U";
   return $api;
}

add_filter('acf/fields/google_map/api', 'posterShopMapKey'); // Lägga till filter som genom funktionen ovan deklareras och sätter nyckel-värdet till API:et.
?>