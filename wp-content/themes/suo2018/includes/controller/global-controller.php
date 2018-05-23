<?php
function get_event_date(){
	$timestring = strtotime(get_field('datum','options'));
	return date('d. F Y',$timestring);
}

function clean_iframe($iframe){
	return '<iframe width="640" height="360" src="'.$iframe.'" allowfullscreen></iframe>';
}