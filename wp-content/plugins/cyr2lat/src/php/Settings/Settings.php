<?php
/**
 * Settings class file.
 *
 * @package cyr-to-lat
 */

<<<<<<< HEAD
namespace Cyr_To_Lat\Settings;

use Cyr_To_Lat\Settings\Abstracts\SettingsBase;
use Cyr_To_Lat\Settings\Abstracts\SettingsInterface;
use Cyr_To_Lat\Symfony\Polyfill\Mbstring\Mbstring;
=======
namespace CyrToLat\Settings;

use CyrToLat\Settings\Abstracts\SettingsBase;
use CyrToLat\Settings\Abstracts\SettingsInterface;
use CyrToLat\Symfony\Polyfill\Mbstring\Mbstring;
>>>>>>> update

/**
 * Class Settings
 *
<<<<<<< HEAD
 * Central point to get settings from.
=======
 * The central point to get settings from.
>>>>>>> update
 */
class Settings implements SettingsInterface {

	/**
<<<<<<< HEAD
	 * Menu pages classes.
	 */
	const MENU_PAGES = [
		[ Tables::class, Converter::class ],
	];

	/**
	 * Menu pages class instances.
	 *
	 * @var array
	 */
	protected $menu_pages = [];
=======
	 * Menu pages class names.
	 *
	 * @var array
	 */
	protected $menu_pages_classes;

	/**
	 * Menu pages and tabs in one flat array.
	 *
	 * @var array
	 */
	protected $tabs = [];
>>>>>>> update

	/**
	 * Screen ids of pages and tabs.
	 *
	 * @var array
	 */
	private $screen_ids = [];

	/**
	 * Settings constructor.
<<<<<<< HEAD
	 */
	public function __construct() {
=======
	 *
	 * @param array $menu_pages_classes Menu pages.
	 */
	public function __construct( array $menu_pages_classes = [] ) {
		// Allow to specify $menu_pages_classes item as one class, not an array.
		$this->menu_pages_classes = $menu_pages_classes;

>>>>>>> update
		$this->init();
	}

	/**
	 * Init class.
<<<<<<< HEAD
	 *
	 * @noinspection UnnecessaryCastingInspection
	 */
	protected function init() {
		// Allow to specify MENU_PAGES item as one class, not an array.
		$menu_pages = (array) self::MENU_PAGES;

		foreach ( $menu_pages as $menu_page ) {
			$tab_classes = (array) $menu_page;
=======
	 */
	protected function init() {
		foreach ( $this->menu_pages_classes as $menu_page_classes ) {
			$tab_classes = (array) $menu_page_classes;
>>>>>>> update

			// Allow to specify menu page as one class, without tabs.
			$page_class  = $tab_classes[0];
			$tab_classes = array_slice( $tab_classes, 1 );

			$tabs = [];
			foreach ( $tab_classes as $tab_class ) {
				/**
				 * Tab.
				 *
				 * @var PluginSettingsBase $tab
				 */
				$tab                = new $tab_class( null );
				$tabs[]             = $tab;
				$this->screen_ids[] = $tab->screen_id();
			}

			/**
			 * Page.
			 *
			 * @var PluginSettingsBase $page_class
			 */
<<<<<<< HEAD
			$this->menu_pages[] = new $page_class( $tabs );
		}
=======
			$menu_page = new $page_class( $tabs );

			$this->tabs[] = [ $menu_page ];
			$this->tabs[] = $tabs;
		}

		$this->tabs = array_merge( [], ...$this->tabs );
	}

	/**
	 * Get tabs.
	 *
	 * @return array
	 */
	public function get_tabs(): array {
		return $this->tabs;
>>>>>>> update
	}

	/**
	 * Get plugin option.
	 *
	 * @param string $key         Setting name.
	 * @param mixed  $empty_value Empty value for this setting.
	 *
	 * @return string|array The value specified for the option or a default value for the option.
	 */
<<<<<<< HEAD
	public function get( $key, $empty_value = null ) {
		$value = '';

		foreach ( $this->menu_pages as $menu_page ) {
			/**
			 * Menu page.
			 *
			 * @var SettingsBase $menu_page
			 */
			$value = $menu_page->get( $key, $empty_value );
			if ( ! empty( $value ) ) {
				break;
			}

			$tabs = $menu_page->get_tabs();

			foreach ( $tabs as $tab ) {
				/**
				 * Tab.
				 *
				 * @var SettingsBase $tab
				 */
				$value = $tab->get( $key, $empty_value );
				if ( ! empty( $value ) ) {
					break 2;
				}
			}
=======
	public function get( string $key, $empty_value = null ) {
		$value = '';

		foreach ( $this->tabs as $tab ) {
			/**
			 * Page / Tab.
			 *
			 * @var SettingsBase $tab
			 */
			$value = $tab->get( $key, $empty_value );

			if ( ! empty( $value ) ) {
				break;
			}
>>>>>>> update
		}

		if ( '' === $value && ! is_null( $empty_value ) ) {
			$value = $empty_value;
		}

		return $value;
	}

	/**
<<<<<<< HEAD
=======
	 * Check whether option value equals to the compared.
	 *
	 * @param string $key     Setting name.
	 * @param string $compare Compared value.
	 *
	 * @return bool
	 */
	public function is( string $key, string $compare ): bool {
		$value = $this->get( $key );

		if ( is_array( $value ) ) {
			return in_array( $compare, $value, true );
		}

		return $value === $compare;
	}

	/**
	 * Check whether option value is 'on' or just non-empty.
	 *
	 * @param string $key Setting name.
	 *
	 * @return bool
	 * @noinspection PhpUnused
	 */
	public function is_on( string $key ): bool {
		return ! empty( $this->get( $key ) );
	}

	/**
	 * Set field.
	 *
	 * @param string $key       Setting name.
	 * @param string $field_key Field key.
	 * @param mixed  $value     Value.
	 *
	 * @return void
	 * @noinspection PhpUnused
	 */
	public function set_field( string $key, string $field_key, $value ) {
		foreach ( $this->tabs as $tab ) {
			/**
			 * Page / Tab.
			 *
			 * @var SettingsBase $tab
			 */
			if ( $tab->set_field( $key, $field_key, $value ) ) {
				break;
			}
		}
	}

	/**
>>>>>>> update
	 * Get screen ids of all settings pages and tabs.
	 *
	 * @return array
	 */
<<<<<<< HEAD
	public function screen_ids() {
=======
	public function screen_ids(): array {
>>>>>>> update
		return $this->screen_ids;
	}

	/**
	 * Get transliteration table.
	 *
	 * @return array
	 */
<<<<<<< HEAD
	public function get_table() {
=======
	public function get_table(): array {
>>>>>>> update
		// List of locales: https://make.wordpress.org/polyglots/teams/.
		$locale = (string) apply_filters( 'ctl_locale', get_locale() );
		$table  = $this->get( $locale );
		if ( empty( $table ) ) {
			$table = $this->get( 'iso9' );
		}

		return $this->transpose_chinese_table( $table );
	}

	/**
	 * Is current locale a Chinese one.
	 *
	 * @return bool
	 */
<<<<<<< HEAD
	public function is_chinese_locale() {
=======
	public function is_chinese_locale(): bool {
>>>>>>> update
		$chinese_locales = [ 'zh_CN', 'zh_HK', 'zh_SG', 'zh_TW' ];

		return in_array( get_locale(), $chinese_locales, true );
	}

	/**
	 * Transpose Chinese table.
	 *
	 * Chinese tables are stored in different way, to show them compact.
	 *
	 * @param array $table Table.
	 *
	 * @return array
	 */
<<<<<<< HEAD
	protected function transpose_chinese_table( $table ) {
=======
	protected function transpose_chinese_table( array $table ): array {
>>>>>>> update
		if ( ! $this->is_chinese_locale() ) {
			return $table;
		}

		$transposed_table = [];
		foreach ( $table as $key => $item ) {
			$hieroglyphs = Mbstring::mb_str_split( $item );
			foreach ( $hieroglyphs as $hieroglyph ) {
				$transposed_table[ $hieroglyph ] = $key;
			}
		}

		return $transposed_table;
	}
}
