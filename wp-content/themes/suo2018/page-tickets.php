<?php
// Redirect if Tickets are off
if(!get_field('tickets_aktivieren','options')){
	header('Location: ' . home_url(), true, 302);
}

//HTML Begin
get_template_part('modules/html_begin');

// Page Tickets
get_template_part('partials/page-tickets/pt-content');

//HTML End
get_template_part('modules/html_end');
