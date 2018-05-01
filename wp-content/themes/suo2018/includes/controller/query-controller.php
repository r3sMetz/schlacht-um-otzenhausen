<?php
function get_last_post(){
	$posts = get_posts();
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