<?php
/**
 * Add stylesheet to theme
 */
function theme_styles(){
    // Plugins
    //wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
    // Custom Styles
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
        $bg = get_field('hintergrundbild','options');
	    wp_add_inline_style('styles','body{background-image:url('.$bg['url'].')}');
}
add_action('wp_enqueue_scripts', 'theme_styles');


/**
 * Add all minified scripts
 */
function theme_scripts(){
    // Plugins
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.min.js',null,null,true);

    // Custom Script
    wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.v2.js',null,null,true);
    wp_localize_script('scripts','defaults',array(
        //'home_url'               => home_url(),
        //'page_id'                => get_the_ID(),
        //'template_directory_uri' => get_template_directory_uri(),
        //'template_directory'     => get_template_directory(),
        //'ajax_url'               => admin_url('admin-ajax.php'),
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


