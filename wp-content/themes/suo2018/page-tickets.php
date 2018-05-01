<?php
// Redirect if Tickets are off
if(!get_field('tickets_aktivieren','options')){
	header('Location: ' . home_url(), true, 302);
}
