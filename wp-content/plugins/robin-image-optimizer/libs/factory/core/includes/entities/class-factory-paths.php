<?php

<<<<<<< HEAD
namespace WBCR\Factory_450\Entities;
=======
namespace WBCR\Factory_469\Entities;
>>>>>>> update

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, repo: https://github.com/alexkovalevv
 * @author        Webcraftic <wordpress.webraftic@gmail.com>, site: https://webcraftic.com
 * @since 4.1.1
 */

class Paths {

	public $absolute;
	public $main_file;
	public $relative;
	public $url;

	protected $plugin_path;

	public function __construct( $plugin_file ) {
		$this->plugin_path = $plugin_file;

		$this->main_file  = $plugin_file;
		$this->absolute   = dirname( $plugin_file );
		$this->basename   = plugin_basename( $plugin_file );
<<<<<<< HEAD
		$this->url        = plugins_url( null, $plugin_file );
=======
		$this->url        = plugins_url( '', $plugin_file );
>>>>>>> update
		$this->migrations = $this->absolute . '/migrations';
	}
}
