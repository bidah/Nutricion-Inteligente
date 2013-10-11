<?php
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));
  
  function ni_scripts_styles() {
  wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '1', true);
	wp_enqueue_script( 'modernizr' );
	
	wp_register_script('fitvid', get_template_directory_uri() . '/js/fitvid.js', array(), '1', true);
	wp_enqueue_script( 'fitvid' );
	
	wp_register_script( 'ssocial', get_template_directory_uri() . "/webfonts/ss-social.js", array(), '0.1', 'screen' );
	wp_enqueue_script('ssocial');
	
	wp_register_style( 'sstandard', get_template_directory_uri() . "/webfonts/ss-standard.css", array(), '0.1', 'screen' );
	wp_enqueue_style('sstandard');
	
	wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.js', array(), '2.2', true);
	wp_enqueue_script( 'swiper' );
	
	wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.js', array(), '1', true);
	wp_enqueue_script( 'waypoints' );
	
	wp_register_script('scrollto', get_template_directory_uri() . '/js/scrollto.js', array(), '1', true);
	wp_enqueue_script( 'scrollto' );
	
	wp_register_script('localscroll', get_template_directory_uri() . '/js/localscroll.js', array(), '1', true);
	wp_enqueue_script( 'localscroll' );
	
  wp_register_script('fx', get_template_directory_uri() . '/js/fx.js', array(), '1', true);
	wp_enqueue_script( 'fx' );
	
	wp_register_style( 'ssocial', get_template_directory_uri() . "/webfonts/ss-social.css", array(), '0.1', 'screen' );
	wp_enqueue_style('ssocial');
	
	wp_register_style( 'sstandard', get_template_directory_uri() . "/webfonts/ss-sstandard.css", array(), '0.1', 'screen' );
	wp_enqueue_style('sstandard');
	
	wp_register_style( 'swiper', get_template_directory_uri() . "/swiper.css", array(), '0.1', 'screen' );
	wp_enqueue_style('swiper');
	
	wp_register_style( 'reset', get_template_directory_uri() . "/reset.css", array(), '0.1', 'screen' );
	wp_enqueue_style('reset');	
}
add_action( 'wp_enqueue_scripts', 'ni_scripts_styles' );

  register_sidebars(5);
  if (class_exists('MultiPostThumbnails')) {
    $types = array('post', 'page');
    foreach($types as $type) {
        new MultiPostThumbnails(array(
            'label' => 'Imagen de fondo',
            'id' => 'secondary-image',
            'post_type' => $type
            )
        );
    }
  }
?>