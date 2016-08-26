<?php
/**
 * Plugin Name: Disable ACF on Frontend
 * Description: Provides a performance boost if ACF frontend functions aren't being used
 * Version:     1.0
 * Author:      Bill Erickson
 * Author URI:  http://www.billerickson.net
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 */
 
/**
 * Disable ACF on Frontend
 *
 */
function ea_disable_acf_on_frontend( $plugins ) {

	if( is_admin() )
		return $plugins;

	foreach( $plugins as $i => $plugin )
		if( 'advanced-custom-fields-pro/acf.php' == $plugin )
			unset( $plugins[$i] );
	return $plugins;
}
add_filter( 'option_active_plugins', 'ea_disable_acf_on_frontend' );