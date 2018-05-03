<?php
function buildFrontPageHeadline($headline){
	return str_replace('um','um<br/>',$headline);
}

// Get Icons And Options for FrontPage
function get_menue_options($id){
	$option_array = array(
		'10' => array(
			'icon' => 'flaticon bands',
			'special' => ['bands_aktivieren','band-nachricht'],
		),
		'12' => array(
			'icon' => 'fa fa-info-circle',
			'special' => null,
		),
		'30' => array(
			'icon' => 'fa fa-ticket',
			'special' => ['tickets_aktivieren','ticket-nachricht']
		),
		'6' => array(
			'icon' => 'flaticon anfahrt',
			'special' => null,
		)
	);

	return $option_array[$id];
}

function build_item_options($item){
	$options = get_menue_options($item->object_id);
	return array(
		'off' => $options['special'] && !get_field($options['special'][0],'options') ? ' off' : null,
		'muted' => $options['special'] && !get_field($options['special'][0],'options') ? ' text-muted' : null,
		'icon'  => $options['icon'],
		'headline' => $options['special'] && !get_field($options['special'][0],'options') ? get_headline($item,get_field($options['special'][1],'options')) : $item->title
	);
}

function get_headline($item,$addition_text){
	return $item->title.' <br class="d-none-md">( <small>'.$addition_text.'</small> )';
}