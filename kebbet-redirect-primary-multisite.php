<?php
/**
 * Plugin Name:       Kebbet plugins - Redirect primary multisite
 * Plugin URI:        https://github.com/kebbet/kebbet-redirect-primary-multisite
 * Description:       Redirect the main site to a subsite.
 * Version:           1.0.0
 * Author:            Erik Betshammar
 * Author URI:        https://verkan.se
 * Text Domain        kebbet-redirect-primary-multisite
 * Requires at least: 5.8
 * Update URI:        false
 *
 * @package kebbet-redirect-primary-multisite
 * @author Erik Betshammar
 */

namespace kebbet\redirect_primary_multisite;

! defined( 'ABSPATH' ) and exit;

/**
 * The redirect.
 *
 * @since 1.0.0
 *
 * @return void
 */
function redirect_action(){
	if ( is_main_site() ) {
		// The URL to redirect to.
		$url = 'https://stamfest.no/2022/';

		// Exit, otherwise wp_redirect won't work properly.
		exit( wp_redirect( $url, 301 ) );
	}
}
add_action( 'parse_request', __NAMESPACE__ . '\redirect_action');
