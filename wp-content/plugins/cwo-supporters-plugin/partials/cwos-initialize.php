<?php
function cwos_initialize_at_activation(){
	if(!get_option('cwo_supporters'))
		add_option('cwo_supporters','[]');
}

register_activation_hook(dirname(plugin_dir_path(__FILE__)).'/'.CWOS_PLUGINFILE,'cwos_initialize_at_activation');
