<?php
//Link Manger Because of Old Wordpress
update_option( 'link_manager_enabled', 0 );

//Hide Admin Bar
//add_filter('show_admin_bar', '__return_false');


function custom_menu_page_removing() {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'custom_menu_page_removing' );
?>
