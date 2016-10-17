<?php
/**
 * Plugin Name: Disable ACF on Frontend
 * Description: Disable ACF functions on the front-end of WordPress in order to provide a performance boost.
 * Version:     2.0
 * Author:      Lee Peterson
 * Author URI:  http://www.leepeterson.me
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 */
 
/**
 * Disable ACF on Frontend
 *
 * This is a forked and modified version of Bill Erickson's 
 * Disable ACF Front-end (http://www.billerickson.net/code/disable-acf-frontend/).
 * It accounts for both free and premium versions of Advanced Custom Fields.
 */
function jc_acf_disable_frontend( $plugins ) {

	$acf_types = array();
	
	if ( ! is_admin() ) {
		array_push( $acf_types,
			   'advanced-custom-fields/acf.php', // ACF Free Version
			   'advanced-custom-fields-pro/acf.php' // ACF Pro Version
		);
	}
		
	foreach( $acf_types as $plugin ) {
		$key = array_search( $plugin, $plugins );
		
		if( false !== $key ) {
			unset( $plugins[ $key ] );
		}
	}

	return $plugins;
}
add_filter( 'option_active_plugins', 'jc_acf_disable_frontend' );