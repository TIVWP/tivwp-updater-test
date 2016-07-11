<?php
/**
 * Plugin Name: TIVWP Updater Test
 * Plugin URI: https://github.com/TIVWP/tivwp-updater-test/
 * Version: 1.0.0
 * Description: QA for TIVWP Updater
 * Author: tivnet
 * Author URI: https://github.com/tivnet
 * License: GPL2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup updater.
 */
function tivwp_updater_test__setup_updater() {
	/** @noinspection PhpUndefinedClassInspection */
	new TIVWP_Updater( array(
		'plugin_file' => __FILE__,
		'product_id'  => 'TIVWP Updater Test',
		'url_product' => 'http://www.wpglobus.com/product/tivwp-updater-test/'
	) );
}

add_action( 'tivwp_updater_factory', 'tivwp_updater_test__setup_updater' );

/*EOF*/
