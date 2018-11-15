<?php
// Scripts
function cwos_enqueue_admin_scripts( $hook ) {
	if ( $hook === 'toplevel_page_' . cwos_create_admin_slug() ) {
		// Vue Registration
		wp_register_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js' );

		// CWO-JS enqueueing (Depends on Vue and Jquery)
		wp_enqueue_script( 'cwos-js', dirname( plugin_dir_url( __FILE__ ) ) . '/assets/admin_js/cwos-main.js', array( 'jquery', 'vue' ) );
	}
}

add_action( 'admin_enqueue_scripts', 'cwos_enqueue_admin_scripts' );

// Styles
function cwos_enqueue_admin_styles( $hook ) {
	if ( $hook === 'toplevel_page_' . cwos_create_admin_slug() ) {
		// CWOS-Backend-CSS
		wp_enqueue_style( 'cwos-css', dirname( plugin_dir_url( __FILE__ ) ) . '/assets/admin_css/cwos_styles.css');
	}
}

add_action( 'admin_enqueue_scripts', 'cwos_enqueue_admin_styles' );

// Styles
function cwos_enqueue_frontend_scripts( $hook ) {
	// CWOS-Frontend-JS
	// wp_enqueue_script( 'cwos-frontend-js', dirname( plugin_dir_url( __FILE__ ) ) . '/assets/frontend_js/cwos-frontend.js',null,microtime(),true);
}

add_action( 'wp_enqueue_scripts', 'cwos_enqueue_frontend_scripts' );