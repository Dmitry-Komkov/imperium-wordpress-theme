<?php
/**
 * SettingsInterface interface file.
 *
 * @package cyr-to-lat
 */

<<<<<<< HEAD
namespace Cyr_To_Lat\Settings\Abstracts;
=======
namespace CyrToLat\Settings\Abstracts;
>>>>>>> update

/**
 * Interface SettingsInterface.
 */
interface SettingsInterface {
	/**
	 * Get plugin option.
	 *
	 * @param string $key         Setting name.
	 * @param mixed  $empty_value Empty value for this setting.
	 *
	 * @return string|array The value specified for the option or a default value for the option.
	 */
<<<<<<< HEAD
	public function get( $key, $empty_value = null );
=======
	public function get( string $key, $empty_value = null );
>>>>>>> update
}
