<?php


/**
 * Disable ACF on Frontend
 *
 */
function ea_disable_acf_on_frontend( $plugins ) {
	foreach( $plugins as $i => $plugin )
		if( 'advanced-custom-fields-pro/acf.php' == $plugin )
			unset( $plugins[$i] );
	return $plugins;
}
add_filter( 'option_active_plugins', 'ea_disable_acf_on_frontend' );