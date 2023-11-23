<?php

<<<<<<< HEAD
namespace WBCR\Factory_450\Updates;

// Exit if accessed directly
use Wbcr_Factory450_Plugin;
=======
namespace WBCR\Factory_469\Updates;

// Exit if accessed directly
use Wbcr_Factory469_Plugin;
>>>>>>> update

if( !defined('ABSPATH') ) {
	exit;
}

/**
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, repo: https://github.com/alexkovalevv
 * @author        Webcraftic <wordpress.webraftic@gmail.com>, site: https://webcraftic.com
 * @copyright (c) 2018 Webraftic Ltd
 * @version       1.0
 */
abstract class Repository {

	/**
	 * @var bool
	 */
	protected $initialized = false;

	/**
<<<<<<< HEAD
	 * @var Wbcr_Factory450_Plugin
=======
	 * @var Wbcr_Factory469_Plugin
>>>>>>> update
	 */
	protected $plugin;

	/**
	 * Repository constructor.
	 *
<<<<<<< HEAD
	 * @param Wbcr_Factory450_Plugin $plugin
	 * @param array $settings
	 */
	abstract public function __construct(Wbcr_Factory450_Plugin $plugin, array $settings = []);
=======
	 * @param Wbcr_Factory469_Plugin $plugin
	 * @param array $settings
	 */
	abstract public function __construct(Wbcr_Factory469_Plugin $plugin, array $settings = []);
>>>>>>> update

	/**
	 * @return void
	 */
	abstract public function init();

	/**
	 * @return bool
	 */
	abstract public function need_check_updates();

	/**
	 * @return mixed
	 */
	abstract public function is_support_premium();

	/**
	 * @return string
	 */
	abstract public function get_download_url();

	/**
	 * @return string
	 */
	abstract public function get_last_version();
}