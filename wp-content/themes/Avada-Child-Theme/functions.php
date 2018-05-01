  <?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

/* svg logo */
/*
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg_thumb_display() {
  echo '
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
  ';
}
add_action('admin_head', 'fix_svg_thumb_display');*/
/* end code for svg */

/*add widget for office time */

add_action( 'widgets_init', 'custom_slug_widgets_init' );
function custom_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Office Time', 'theme-slug' ),
        'id' => 'office-time',
        'description' => __( 'Widgets in this area will be shown on top header.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="fusion-contact-info">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'class' => 'myClass',
    ) );
}

/* remove p tag from widget office time*/

//remove_filter('widget_text_content', 'wpautop');