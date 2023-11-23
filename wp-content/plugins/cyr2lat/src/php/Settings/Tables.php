<?php
/**
 * Tables class file.
 *
 * @package cyr-to-lat
 */

<<<<<<< HEAD
namespace Cyr_To_Lat\Settings;

use Cyr_To_Lat\Conversion_Tables;
=======
namespace CyrToLat\Settings;

use CyrToLat\ConversionTables;
use CyrToLat\Settings\Abstracts\SettingsBase;
>>>>>>> update

/**
 * Class Tables
 *
 * Settings page "Tables" (main).
 */
class Tables extends PluginSettingsBase {

	/**
	 * Admin script handle.
	 */
	const HANDLE = 'cyr-to-lat-tables';

	/**
	 * Script localization object.
	 */
<<<<<<< HEAD
	const OBJECT = ' Cyr2LatTablesObject';
=======
	const OBJECT = 'Cyr2LatTablesObject';

	/**
	 * Save table ajax action.
	 */
	const SAVE_TABLE_ACTION = 'cyr-to-lat-save-table';
>>>>>>> update

	/**
	 * Served locales.
	 *
	 * @var array
	 */
	protected $locales = [];

	/**
<<<<<<< HEAD
	 * Get screen id.
	 *
	 * @return string
	 */
	public function screen_id() {
		return 'settings_page_cyr-to-lat';
	}

	/**
	 * Get option group.
	 *
	 * @return string
	 */
	protected function option_group() {
		return 'cyr_to_lat_group';
	}

	/**
	 * Get option page.
	 *
	 * @return string
	 */
	protected function option_page() {
		return 'cyr-to-lat';
	}

	/**
	 * Get option name.
	 *
	 * @return string
	 */
	protected function option_name() {
		return 'cyr_to_lat_settings';
	}

	/**
=======
>>>>>>> update
	 * Get page title.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function page_title() {
=======
	protected function page_title(): string {
>>>>>>> update
		return __( 'Tables', 'cyr2lat' );
	}

	/**
<<<<<<< HEAD
	 * Get menu title.
	 *
	 * @return string
	 */
	protected function menu_title() {
		return __( 'Cyr To Lat', 'cyr2lat' );
	}

	/**
=======
>>>>>>> update
	 * Get section title.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function section_title() {
		return '';
=======
	protected function section_title(): string {
		return 'tables';
	}

	/**
	 * Init class hooks.
	 */
	protected function init_hooks() {
		parent::init_hooks();

		add_action( 'wp_ajax_' . self::SAVE_TABLE_ACTION, [ $this, 'save_table' ] );
	}

	/**
	 * Get locales.
	 *
	 * @return array
	 */
	public function get_locales(): array {
		return $this->locales;
>>>>>>> update
	}

	/**
	 * Init locales.
	 */
	protected function init_locales() {
		if ( ! empty( $this->locales ) ) {
			return;
		}

		$this->locales = [
<<<<<<< HEAD
			'iso9'  => [
				'label' => __( 'ISO9 Table', 'cyr2lat' ),
			],
			'bel'   => [
				'label' => __( 'bel Table', 'cyr2lat' ),
			],
			'uk'    => [
				'label' => __( 'uk Table', 'cyr2lat' ),
			],
			'bg_BG' => [
				'label' => __( 'bg_BG Table', 'cyr2lat' ),
			],
			'mk_MK' => [
				'label' => __( 'mk_MK Table', 'cyr2lat' ),
			],
			'sr_RS' => [
				'label' => __( 'sr_RS Table', 'cyr2lat' ),
			],
			'el'    => [
				'label' => __( 'el Table', 'cyr2lat' ),
			],
			'hy'    => [
				'label' => __( 'hy Table', 'cyr2lat' ),
			],
			'ka_GE' => [
				'label' => __( 'ka_GE Table', 'cyr2lat' ),
			],
			'kk'    => [
				'label' => __( 'kk Table', 'cyr2lat' ),
			],
			'he_IL' => [
				'label' => __( 'he_IL Table', 'cyr2lat' ),
			],
			'zh_CN' => [
				'label' => __( 'zh_CN Table', 'cyr2lat' ),
			],
=======
			'iso9'  => __( 'Default', 'cyr2lat' ) . '<br>ISO9',
			'bel'   => __( 'Belarusian', 'cyr2lat' ) . '<br>bel',
			'uk'    => __( 'Ukrainian', 'cyr2lat' ) . '<br>uk',
			'bg_BG' => __( 'Bulgarian', 'cyr2lat' ) . '<br>bg_BG',
			'mk_MK' => __( 'Macedonian', 'cyr2lat' ) . '<br>mk_MK',
			'sr_RS' => __( 'Serbian', 'cyr2lat' ) . '<br>sr_RS',
			'el'    => __( 'Greek', 'cyr2lat' ) . '<br>el',
			'hy'    => __( 'Armenian', 'cyr2lat' ) . '<br>hy',
			'ka_GE' => __( 'Georgian', 'cyr2lat' ) . '<br>ka_GE',
			'kk'    => __( 'Kazakh', 'cyr2lat' ) . '<br>kk',
			'he_IL' => __( 'Hebrew', 'cyr2lat' ) . '<br>he_IL',
			'zh_CN' => __( 'Chinese (China)', 'cyr2lat' ) . '<br>zh_CN',
>>>>>>> update
		];
	}

	/**
	 * Get current locale.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	private function get_current_locale() {
		$current_locale = get_locale();
=======
	public function get_current_locale(): string {
		$current_locale = (string) apply_filters( 'ctl_locale', get_locale() );
>>>>>>> update

		return array_key_exists( $current_locale, $this->locales ) ? $current_locale : 'iso9';
	}

	/**
	 * Init form fields.
	 */
	public function init_form_fields() {
		$this->init_locales();

		$current_locale = $this->get_current_locale();

<<<<<<< HEAD
		$this->form_fields = [];

		foreach ( $this->locales as $locale => $info ) {
			$current = ( $locale === $current_locale ) ? '<br>' . __( '(current)', 'cyr2lat' ) : '';

			$this->form_fields[ $locale ] = [
				'label'        => $info['label'] . $current,
=======
		foreach ( $this->locales as $locale => $info ) {
			$info = ( $locale === $current_locale ) ? $info . '<br>' . __( '(current)', 'cyr2lat' ) : $info;

			$this->form_fields[ $locale ] = [
				'title'        => $info,
>>>>>>> update
				'section'      => $locale . '_section',
				'type'         => 'table',
				'placeholder'  => '',
				'helper'       => '',
				'supplemental' => '',
<<<<<<< HEAD
				'default'      => Conversion_Tables::get( $locale ),
=======
				'default'      => ConversionTables::get( $locale ),
>>>>>>> update
			];
		}
	}

	/**
<<<<<<< HEAD
	 * Show settings page.
	 */
	public function settings_page() {
		?>
		<div class="wrap">
			<h1>
				<?php
				// Admin panel title.
				esc_html_e( 'Cyr To Lat Plugin Options', 'cyr2lat' );
				?>
			</h1>

			<form id="ctl-options" action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>" method="post">
				<?php
				do_settings_sections( $this->option_page() ); // Sections with options.
				settings_fields( $this->option_group() ); // Hidden protection fields.
				submit_button();
				?>
			</form>

			<div id="appreciation">
				<h2>
					<?php echo esc_html( __( 'Your Appreciation', 'cyr2lat' ) ); ?>
				</h2>
				<a
					target="_blank"
					href="https://wordpress.org/support/view/plugin-reviews/cyr2lat?rate=5#postform">
					<?php echo esc_html( __( 'Leave a ★★★★★ plugin review on WordPress.org', 'cyr2lat' ) ); ?>
				</a>
			</div>
		</div>
		<?php
	}

	/**
=======
>>>>>>> update
	 * Section callback.
	 *
	 * @param array $arguments Section arguments.
	 */
<<<<<<< HEAD
	public function section_callback( $arguments ) {
		$locale = str_replace( '_section', '', $arguments['id'] );
=======
	public function section_callback( array $arguments ) {
		$locale = str_replace( '_section', '', $arguments['id'] );

>>>>>>> update
		if ( $this->get_current_locale() === $locale ) {
			echo '<div id="ctl-current"></div>';
		}
	}

	/**
	 * Enqueue class scripts.
	 */
	public function admin_enqueue_scripts() {
<<<<<<< HEAD
		if ( ! $this->is_options_screen() ) {
			return;
		}

		wp_enqueue_script(
			self::HANDLE,
			constant( 'CYR_TO_LAT_URL' ) . '/assets/js/tables/app.js',
=======
		wp_enqueue_script(
			self::HANDLE,
			constant( 'CYR_TO_LAT_URL' ) . '/assets/js/apps/tables.js',
>>>>>>> update
			[],
			constant( 'CYR_TO_LAT_VERSION' ),
			true
		);

		wp_localize_script(
			self::HANDLE,
			self::OBJECT,
			[
<<<<<<< HEAD
				'optionsSaveSuccessMessage' => __( 'Options saved.', 'cyr2lat' ),
				'optionsSaveErrorMessage'   => __( 'Error saving options.', 'cyr2lat' ),
=======
				'ajaxUrl' => admin_url( 'admin-ajax.php' ),
				'action'  => self::SAVE_TABLE_ACTION,
				'nonce'   => wp_create_nonce( self::SAVE_TABLE_ACTION ),
>>>>>>> update
			]
		);

		wp_enqueue_style(
			self::HANDLE,
<<<<<<< HEAD
			constant( 'CYR_TO_LAT_URL' ) . '/assets/css/tables.css',
			[],
=======
			constant( 'CYR_TO_LAT_URL' ) . "/assets/css/tables$this->min_prefix.css",
			[ SettingsBase::HANDLE ],
>>>>>>> update
			constant( 'CYR_TO_LAT_VERSION' )
		);
	}

	/**
<<<<<<< HEAD
	 * Setup settings sections.
	 */
	public function setup_sections() {
		if ( ! $this->is_options_screen() ) {
			return;
		}

		foreach ( $this->form_fields as $form_field ) {
			add_settings_section(
				$form_field['section'],
				$form_field['label'],
				[ $this, 'section_callback' ],
				$this->option_page()
			);
		}
=======
	 * Save table.
	 *
	 * @return void
	 */
	public function save_table() {
		// Run a security check.
		if ( ! check_ajax_referer( self::SAVE_TABLE_ACTION, 'nonce', false ) ) {
			wp_send_json_error( esc_html__( 'Your session has expired. Please reload the page.', 'cyr2lat' ) );
		}

		// Check for permissions.
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error( esc_html__( 'You are not allowed to perform this action.', 'cyr2lat' ) );
		}

		$new_settings = isset( $_POST['cyr_to_lat_settings'] ) ?
			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
			wp_unslash( $_POST['cyr_to_lat_settings'] ) :
			[];

		// We have only one table returned, so this is loop is executed once.
		foreach ( $new_settings as $new_key => $new_value ) {
			$key   = sanitize_text_field( $new_key );
			$value = [];

			foreach ( $new_value as $k => $v ) {
				$value[ sanitize_text_field( $k ) ] = sanitize_text_field( $v );
			}

			$this->update_option( $key, $value );
		}

		wp_send_json_success( esc_html__( 'Options saved.', 'cyr2lat' ) );
>>>>>>> update
	}
}
