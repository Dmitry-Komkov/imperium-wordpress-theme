<?php

<<<<<<< HEAD
namespace WBCR\Factory_450\Premium;

use Exception;
use Wbcr_Factory450_Plugin;
=======
namespace WBCR\Factory_469\Premium;

use Exception;
use Wbcr_Factory469_Plugin;
>>>>>>> update

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, repo: https://github.com/alexkovalevv
 * @author        Webcraftic <wordpress.webraftic@gmail.com>, site: https://webcraftic.com
 */
class Manager {

	/**
	 * @author Alexander Kovalev <alex.kovalevv@gmail.com>
	 * @since  4.1.6
	 * @var array
	 */
	public static $providers;

	/**
<<<<<<< HEAD
	 * @var Wbcr_Factory450_Plugin
=======
	 * @var Wbcr_Factory469_Plugin
>>>>>>> update
	 */
	protected $plugin;

	/**
	 * @var array
	 */
	protected $settings;

	/**
	 * Manager constructor.
	 *
<<<<<<< HEAD
	 * @param Wbcr_Factory450_Plugin $plugin
=======
	 * @param Wbcr_Factory469_Plugin $plugin
>>>>>>> update
	 * @param array                  $settings
	 *
	 * @throws Exception
	 */
<<<<<<< HEAD
	public function __construct( Wbcr_Factory450_Plugin $plugin, array $settings ) {
=======
	public function __construct( Wbcr_Factory469_Plugin $plugin, array $settings ) {
>>>>>>> update
		$this->plugin   = $plugin;
		$this->settings = $settings;
	}

	/**
<<<<<<< HEAD
	 * @param Wbcr_Factory450_Plugin $plugin
	 * @param array                  $settings
	 *
	 * @return \WBCR\Factory_Freemius_138\Premium\Provider
	 * @throws Exception
	 */
	public static function instance( Wbcr_Factory450_Plugin $plugin, array $settings ) {
=======
	 * @param Wbcr_Factory469_Plugin $plugin
	 * @param array                  $settings
	 *
	 * @return \WBCR\Factory_Freemius_157\Premium\Provider
	 * @throws Exception
	 */
	public static function instance( Wbcr_Factory469_Plugin $plugin, array $settings ) {
>>>>>>> update
		$premium_manager = new Manager( $plugin, $settings );

		return $premium_manager->instance_provider();
	}

	/**
	 * @param $provider_name
	 *
<<<<<<< HEAD
	 * @return \WBCR\Factory_Freemius_138\Premium\Provider
=======
	 * @return \WBCR\Factory_Freemius_157\Premium\Provider
>>>>>>> update
	 * @throws Exception
	 */
	public function instance_provider() {
		$provider_name = $this->get_setting( 'provider' );

		if ( isset( self::$providers[ $provider_name ] ) && class_exists( self::$providers[ $provider_name ] ) ) {
			if ( self::$providers[ $provider_name ] instanceof Provider ) {
<<<<<<< HEAD
				throw new Exception( "Provider {$provider_name} must extend the class WBCR\Factory_450\Premium\Provider interface!" );
=======
				throw new Exception( "Provider {$provider_name} must extend the class WBCR\Factory_469\Premium\Provider interface!" );
>>>>>>> update
			}

			return new self::$providers[ $provider_name ]( $this->plugin, $this->settings );
		}

		throw new Exception( "Provider {$provider_name} is not supported!" );
	}

	/**
	 * @param string $name
	 *
	 * @return mixed
	 */
	protected function get_setting( $name ) {
		return isset( $this->settings[ $name ] ) ? $this->settings[ $name ] : null;
	}
}