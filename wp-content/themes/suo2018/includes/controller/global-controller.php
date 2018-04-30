<?php
function get_event_date(){
	$timestring = strtotime(get_field('datum','options'));
	return date('d. F Y',$timestring);
}
