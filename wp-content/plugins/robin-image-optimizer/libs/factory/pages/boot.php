<?php
/**
 * Factory Pages
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>
 * @since         1.0.1
 * @package       core
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
if( defined('FACTORY_PAGES_449_LOADED') ) {
	return;
}

define('FACTORY_PAGES_449_LOADED', true);

define('FACTORY_PAGES_449_VERSION', '4.4.9');

define('FACTORY_PAGES_449_DIR', dirname(__FILE__));
define('FACTORY_PAGES_449_URL', plugins_url(null, __FILE__));
=======
if( defined('FACTORY_PAGES_467_LOADED') ) {
	return;
}

define('FACTORY_PAGES_467_LOADED', true);

define('FACTORY_PAGES_467_VERSION', '4.6.7');

define('FACTORY_PAGES_467_DIR', dirname(__FILE__));
define('FACTORY_PAGES_467_URL', plugins_url('', __FILE__));
>>>>>>> update

if( !defined('FACTORY_FLAT_ADMIN') ) {
	define('FACTORY_FLAT_ADMIN', true);
}

<<<<<<< HEAD
load_plugin_textdomain('wbcr_factory_pages_449', false, dirname(plugin_basename(__FILE__)) . '/langs');

require(FACTORY_PAGES_449_DIR . '/pages.php');
require(FACTORY_PAGES_449_DIR . '/includes/page.class.php');
require(FACTORY_PAGES_449_DIR . '/includes/admin-page.class.php');
=======
load_plugin_textdomain('wbcr_factory_pages_467', false, dirname(plugin_basename(__FILE__)) . '/langs');

require(FACTORY_PAGES_467_DIR . '/pages.php');
require(FACTORY_PAGES_467_DIR . '/includes/page.class.php');
require(FACTORY_PAGES_467_DIR . '/includes/admin-page.class.php');
>>>>>>> update


