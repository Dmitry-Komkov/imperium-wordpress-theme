<?php
/**
 * The file contains a base class for update items of plugins.
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, repo: https://github.com/alexkovalevv
 * @author        Webcraftic <wordpress.webraftic@gmail.com>, site: https://webcraftic.com
 *
 * @package       factory-core
 * @since         1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Plugin Activator
 *
 * @since 1.0.0
 */
<<<<<<< HEAD
abstract class Wbcr_Factory450_Update {
=======
abstract class Wbcr_Factory469_Update {
>>>>>>> update

	/**
	 * Current plugin
	 *
<<<<<<< HEAD
	 * @var Wbcr_Factory450_Plugin
	 */
	var $plugin;

	public function __construct( Wbcr_Factory450_Plugin $plugin ) {
=======
	 * @var Wbcr_Factory469_Plugin
	 */
	var $plugin;

	public function __construct( Wbcr_Factory469_Plugin $plugin ) {
>>>>>>> update
		$this->plugin = $plugin;
	}

	abstract function install();

	//abstract function rollback();
}
