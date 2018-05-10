<?php
// Redirect if Bands are off
if(!get_field('bands_aktivieren','options')){
	header('Location: ' . home_url(), true, 302);
}

//HTML Begin
get_template_part('modules/html_begin');

// Navbar Module
get_template_part('modules/navbar');

// Page Running-Order Content
get_template_part('partials/page-running-order/pro-content');

// Footer
get_template_part('modules/footer');


//HTML End
get_template_part('modules/html_end');
