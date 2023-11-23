<?php
/**
 * The file contains a base class for plugin activators.
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
abstract class Wbcr_Factory450_Activator {
=======
abstract class Wbcr_Factory469_Activator {
>>>>>>> update

	/**
	 * Curent plugin.
	 *
<<<<<<< HEAD
	 * @var Wbcr_Factory450_Plugin
	 */
	public $plugin;

	public function __construct( Wbcr_Factory450_Plugin $plugin ) {
=======
	 * @var Wbcr_Factory469_Plugin
	 */
	public $plugin;

	public function __construct( Wbcr_Factory469_Plugin $plugin ) {
>>>>>>> update
		$this->plugin = $plugin;
	}

	public function activate() {
	}

	public function deactivate() {
	}

	public function update() {
	}
}
