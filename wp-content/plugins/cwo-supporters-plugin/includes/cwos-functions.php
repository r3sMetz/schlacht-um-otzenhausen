<?php
function cwos_initialize_at_activation(){
	if(!get_option('cwo_supporters'))
		add_option('cwo_supporters','[]');
}

function cwos_create_admin_slug(){
	return str_replace(' ','-',strtolower(CWOS_PLUGINNAME));
}

function cwos_get_supporters($raw = false){
	$all_supporter = json_decode(get_option('cwo_supporters'),true);
	if(!$all_supporter)
		$all_supporter = array();
	file_put_contents('all.txt',print_r($all_supporter,true));
	$categorized_supporter = array('done'=>array(),'open'=>array());

	if(!$raw) {
		foreach ( $all_supporter as $supporter ) {
			if ( $supporter["done"] === "true" ) {
				array_push( $categorized_supporter['done'], $supporter );
			} else {
				array_push( $categorized_supporter['open'], $supporter );
			}

		}

		return $categorized_supporter;
	}
	else
		return $all_supporter;
}

function cwos_format_adress($supporter){
	$adress  = $supporter['street'].'<br>';
	$adress .= $supporter['zip'].' '.$supporter['city'];

	return $adress;
}
