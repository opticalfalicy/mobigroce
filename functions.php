<?php


  function grocery_files() {
    wp_enqueue_script( 'main-grocery-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('googFont', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style( 'fontAwe', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('grocery_main_styles', get_stylesheet_uri(), NULL, microtime());
  }

  function grocery_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location 1');
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location 2');
    add_theme_support('title-tag');
  }

  // function grocery_adjust_queries($query){
  //   if(!is_admin() && is_post_type_archive('event') && $query->is_main_query()){
  //     $today = date('Ymd');
  //     $query->set('meta_key', 'event_date');
  //     $query->set('orderby', 'meta_value_num');
  //     $query->set('order', 'ASC');
  //     $query->set('meta_query', array(
  //       array(
  //         'key' => 'event_date',
  //         'compare' => '>=',
  //         'value' => $today,
  //         'type' => 'numeric'
  //       )
  //     ));
  //   }
  // }

  add_action('wp_enqueue_scripts', 'grocery_files');
  add_action( 'after_setup_theme', 'grocery_features');
  // add_action('pre_get_posts', 'grocery_adjust_queries');

?>