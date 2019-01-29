<?php
/**
 * Add stylesheet to theme
 */
function theme_styles(){
    // Plugins
    //wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
    // Custom Styles
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css',null,SUO_THEME_VERSION);
	    wp_add_inline_style('styles',get_body_inline_styles());
}
add_action('wp_footer', 'theme_styles');


/**
 * Add all minified scripts for theme
 */
function theme_scripts(){
    // Do not Load Block Library
    wp_dequeue_style( 'wp-block-library' );

    // Plugins
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.min.js',null,SUO_THEME_VERSION,true);

    // Custom Script
    wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.v2.js',null,SUO_THEME_VERSION,true);
    wp_localize_script('scripts','defaults',array(
        'home_url'               => home_url(),
        //'page_id'                => get_the_ID(),
        //'template_directory_uri' => get_template_directory_uri(),
        //'template_directory'     => get_template_directory(),
        'ajaxurl'               => admin_url('admin-ajax.php'),
    ));
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'theme_scripts');


/**
* Remove all type-attributes from style and script-tags
*/
//add_filter('style_loader_tag', 'myplugin_remove_type_attr',10, 2);
//add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
//
//function myplugin_remove_type_attr($tag, $handle) {
//    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
//}

/**
 * Build inline Styles for Body
 */
 function get_body_inline_styles(){
 	// Get Background Images (Mobile + Desktop) from Options
 	$bg = get_field('hintergrundbild','options');
    $bg_mob = get_field('hintergrundbild_mobil','options');

    // Build inline Styles
    $inline_style  = 'body{background-image:url('.$bg_mob['url'].')}';
    $inline_style .= '@media screen and (min-width: 768px){body{background-image:url('.$bg['url'].')}}';

    return $inline_style;
 }


