<?php
add_action( 'after_setup_theme', 'custom_image_sizes' );
function custom_image_sizes() {
    add_image_size( 'mini-image', 10 );
}