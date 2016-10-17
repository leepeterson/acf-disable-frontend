<?php
/**
 * Plugin Name:       Disable ACF on Frontend
 * Plugin URI:        https://github.com/leepeterson/acf-disable-frontend
 * Description:       Disable ACF functions on the front-end of WordPress in order to provide a performance boost.
 * Version:           2.0.0
 * Author:            Lee Peterson
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       acf-disable-frontend
 * GitHub Plugin URI: https://github.com/leepeterson/acf-disable-frontend
 * GitHub Branch:     master
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
