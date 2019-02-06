<?php
function get_event_date(){
	$timestring = strtotime(get_field('datum','options'));
	return date('d. F Y',$timestring);
}

function clean_iframe($iframe){
	return '<iframe class="iam-lazy" width="640" height="360" data-src="'.$iframe.'" allowfullscreen></iframe>';
}

function notTooLongBandName($bandname){
	if(strlen($bandname) >= 18){
		$output = "";
		$bandname_as_array = explode(' ',$bandname);

		foreach($bandname_as_array as $word)
			$output.=$word[0];

		return strtoupper($output);
	}
	else {
		return $bandname;
	}
}

function getMiniAndNormalImage($fieldname,$page_id){
	$acf_image_array = get_field($fieldname,$page_id);
	file_put_contents('mini.txt',print_r($acf_image_array,true));
	return array(
		'padding-bottom' => intval($acf_image_array['height'] / intval($acf_image_array['width'])*100)."%",
		'mini' => $acf_image_array['sizes']['mini-image'] ? $acf_image_array['sizes']['mini-image'] : $acf_image_array['url'],
		'normal' =>  $acf_image_array['url']
	);
}
