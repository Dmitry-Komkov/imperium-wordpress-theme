<?php
/**
 * Factory Bootstrap
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>
 * @since         1.0.0
 * @package       factory-bootstrap
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

// module provides function only for the admin area
if( !is_admin() ) {
	return;
}

<<<<<<< HEAD
if( defined('FACTORY_BOOTSTRAP_450_LOADED') ) {
	return;
}

define('FACTORY_BOOTSTRAP_450_VERSION', '4.5.0');
define('FACTORY_BOOTSTRAP_450_LOADED', true);
=======
if( defined('FACTORY_BOOTSTRAP_470_LOADED') ) {
	return;
}

define('FACTORY_BOOTSTRAP_470_VERSION', '4.7.0');
define('FACTORY_BOOTSTRAP_470_LOADED', true);
>>>>>>> update

if( !defined('FACTORY_FLAT_ADMIN') ) {
	define('FACTORY_FLAT_ADMIN', true);
}

<<<<<<< HEAD
define('FACTORY_BOOTSTRAP_450_DIR', dirname(__FILE__));
define('FACTORY_BOOTSTRAP_450_URL', plugins_url(null, __FILE__));

require_once(FACTORY_BOOTSTRAP_450_DIR . '/includes/functions.php');

/**
 * @param Wbcr_Factory450_Plugin $plugin
 */
add_action('wbcr_factory_bootstrap_450_plugin_created', function ($plugin) {
	$manager = new Wbcr_FactoryBootstrap450_Manager($plugin);
=======
define('FACTORY_BOOTSTRAP_470_DIR', dirname(__FILE__));
define('FACTORY_BOOTSTRAP_470_URL', plugins_url('', __FILE__));

require_once(FACTORY_BOOTSTRAP_470_DIR . '/includes/functions.php');

/**
 * @param Wbcr_Factory469_Plugin $plugin
 */
add_action('wbcr_factory_bootstrap_470_plugin_created', function ($plugin) {
	$manager = new Wbcr_FactoryBootstrap470_Manager($plugin);
>>>>>>> update
	$plugin->setBootstap($manager);
});


