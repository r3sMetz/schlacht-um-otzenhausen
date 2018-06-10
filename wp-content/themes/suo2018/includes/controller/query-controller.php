<?php
function get_last_news(){
	$posts = r3_query('news');
	return $posts[0];
}

// PosttypeQuery
function r3_query($post_type,$orderBy='title',$order='ASC',$postsPerPage = -1) {

    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $postsPerPage,
        'orderby'        => $orderBy,
        //'meta_key'       => $orderBy,
        'order'          => $order
    );

    if($orderBy!='title') {
	    $args['meta_key'] = $orderBy;
	    $args['orderby'] = 'meta_value';
    }

    $query = new WP_query($args);

    if($query->have_posts()){
        $return = array();
        while($query->have_posts()){
            $query->the_post();
            $args = null;
            if(function_exists('pll__')){
                $args = pll_get_post(get_the_ID(),pll_current_language());
            }
            $return[] = get_post($args);
        }
        wp_reset_postdata();
        return $return;
    }

    else
        return array();
}

function build_band_array(){
	$all_bands = r3_query('bands');
	$return_array = array(
		'headliner' => array(),
		'normal' => array(),
	);

	foreach($all_bands as $band){
		if(get_field('headliner',$band->ID))
			$return_array['headliner'][] = $band;
		else
			$return_array['normal'][]= $band;
	}

	return $return_array;
}

function build_running_order(){
	// Get all Bands
	$all_bands = r3_query('bands','startzeit');

	// Put Bands after 0:00 to the End of the Array
	foreach($all_bands as $key => $band){
		$reftime = strtotime('12:00');
		$bandtime = strtotime(get_field('startzeit',$band->ID));
		if($bandtime<$reftime){
			$shifted = array_shift($all_bands);
			array_push($all_bands,$band);
		}
	}

	// Put Bands to Their Stage
	$staged_bands = array(
		'mainstage' => array(),
		'clubstage' => array()
	);
	foreach($all_bands as $band){
		if(get_field('buhne',$band->ID) == 'Mainstage')
			array_push($staged_bands['mainstage'],$band);
		else
			array_push($staged_bands['clubstage'],$band);
	}

	return $staged_bands;
}