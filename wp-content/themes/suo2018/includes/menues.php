<?php
//Enable Menues
function register_suo_menues() {
    $menuArray = array(
        'hauptmenue' => __('Hauptmenue'),
        'untermenue' => __('Untermenue')
    );

    register_nav_menus($menuArray);
}
add_action('init','register_suo_menues');

//Get Main Menu
function r3_getMenue($menu,$id){
	$the_menue = wp_get_nav_menu_items($menu);
	foreach($the_menue as $key => $page){
		if($page->object_id == $id)
			$the_menue[$key]->active = true;

		// Hide Ticket Pages if Tickets are deactived
		if(!get_field('tickets_aktivieren','option') && in_array($page->object_id,array(30)))
			$the_menue[$key]->dont_show = true;


		// Hide Band Pages if Bands are deactivated
		if(!get_field('bands_aktivieren','option') && in_array($page->object_id,array(10,118)))
			$the_menue[$key]->dont_show = true;
	}

	return $the_menue;
}

