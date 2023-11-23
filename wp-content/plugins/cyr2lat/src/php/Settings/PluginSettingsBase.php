<?php
/**
 * PluginSettingsBase class file.
 *
 * @package cyr-to-lat
 */

<<<<<<< HEAD
namespace Cyr_To_Lat\Settings;

use Cyr_To_Lat\Settings\Abstracts\SettingsBase;
=======
namespace CyrToLat\Settings;

use CyrToLat\Settings\Abstracts\SettingsBase;
>>>>>>> update

/**
 * Class PluginSettingsBase
 *
 * Extends general SettingsBase suitable for any plugin with current plugin related methods.
 */
abstract class PluginSettingsBase extends SettingsBase {

	/**
<<<<<<< HEAD
=======
	 * Constructor.
	 *
	 * @param array|null $tabs Tabs of this settings page.
	 */
	public function __construct( $tabs = [] ) {
		add_filter( 'admin_footer_text', [ $this, 'admin_footer_text' ] );
		add_filter( 'update_footer', [ $this, 'update_footer' ], PHP_INT_MAX );

		parent::__construct( $tabs );
	}

	/**
	 * Get menu title.
	 *
	 * @return string
	 */
	protected function menu_title(): string {
		return __( 'Cyr To Lat', 'cyr2lat' );
	}

	/**
	 * Get screen id.
	 *
	 * @return string
	 */
	public function screen_id(): string {
		return 'settings_page_cyr-to-lat';
	}

	/**
	 * Get option group.
	 *
	 * @return string
	 */
	protected function option_group(): string {
		return 'cyr_to_lat_group';
	}

	/**
	 * Get option page.
	 *
	 * @return string
	 */
	protected function option_page(): string {
		return 'cyr-to-lat';
	}

	/**
	 * Get option name.
	 *
	 * @return string
	 */
	protected function option_name(): string {
		return 'cyr_to_lat_settings';
	}

	/**
>>>>>>> update
	 * Get plugin base name.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function plugin_basename() {
=======
	protected function plugin_basename(): string {
>>>>>>> update
		return plugin_basename( constant( 'CYR_TO_LAT_FILE' ) );
	}

	/**
	 * Get plugin url.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function plugin_url() {
=======
	protected function plugin_url(): string {
>>>>>>> update
		return constant( 'CYR_TO_LAT_URL' );
	}

	/**
	 * Get plugin version.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function plugin_version() {
=======
	protected function plugin_version(): string {
>>>>>>> update
		return constant( 'CYR_TO_LAT_VERSION' );
	}

	/**
	 * Get settings link label.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function settings_link_label() {
=======
	protected function settings_link_label(): string {
>>>>>>> update
		return __( 'View Cyr To Lat settings', 'cyr2lat' );
	}

	/**
	 * Get settings link text.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function settings_link_text() {
=======
	protected function settings_link_text(): string {
>>>>>>> update
		return __( 'Settings', 'cyr2lat' );
	}

	/**
	 * Get text domain.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function text_domain() {
		return 'cyr2lat';
	}
=======
	protected function text_domain(): string {
		return 'cyr2lat';
	}

	/**
	 * Setup settings fields.
	 */
	public function setup_fields() {
		$prefix = $this->option_page() . '-' . static::section_title() . '-';

		foreach ( $this->form_fields as $key => $form_field ) {
			if ( ! isset( $form_field['class'] ) ) {
				$this->form_fields[ $key ]['class'] = str_replace( '_', '-', $prefix . $key );
			}
		}

		parent::setup_fields();
	}

	/**
	 * Show settings page.
	 */
	public function settings_page() {
		?>
		<h1 class="ctl-settings-header">
			<img
					src="<?php echo esc_url( constant( 'CYR_TO_LAT_URL' ) . '/assets/images/logo.svg' ); ?>"
					alt="Cyr To Lat Logo"
					class="ctl-logo"
			/>
			<?php
			// Admin panel title.
			esc_html_e( 'Cyr To Lat', 'cyr2lat' );
			?>
		</h1>

		<form
				id="ctl-options"
				class="ctl-<?php echo esc_attr( $this->section_title() ); ?>"
				action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>"
				method="post">
			<?php
			do_settings_sections( $this->option_page() ); // Sections with options.
			settings_fields( $this->option_group() ); // Hidden protection fields.

			if ( ! empty( $this->form_fields ) ) {
				submit_button();
			}
			?>
		</form>
		<?php
	}

	/**
	 * When user is on the plugin admin page, display footer text that graciously asks them to rate us.
	 *
	 * @param string|mixed $text Footer text.
	 *
	 * @return string|mixed
	 */
	public function admin_footer_text( $text ) {
		if ( ! $this->is_options_screen() ) {
			return $text;
		}

		$url = 'https://wordpress.org/support/plugin/cyr2lat/reviews/?filter=5#new-post';

		return wp_kses(
			sprintf(
			/* translators: 1: plugin name, 2: wp.org review link with stars, 3: wp.org review link with text. */
				__( 'Please rate %1$s %2$s on %3$s. Thank you!', 'cyr2lat' ),
				'<strong>Cyr To Lat</strong>',
				sprintf(
					'<a href="%s" target="_blank" rel="noopener noreferrer">★★★★★</a>',
					$url
				),
				sprintf(
					'<a href="%s" target="_blank" rel="noopener noreferrer">WordPress.org</a>',
					$url
				)
			),
			[
				'a' => [
					'href'   => [],
					'target' => [],
					'rel'    => [],
				],
			]
		);
	}

	/**
	 * Show plugin version in the update footer.
	 *
	 * @param string|mixed $content The content that will be printed.
	 *
	 * @return string|mixed
	 */
	public function update_footer( $content ) {
		if ( ! $this->is_options_screen() ) {
			return $content;
		}

		return sprintf(
		/* translators: 1: plugin version. */
			__( 'Version %s', 'cyr2lat' ),
			CYR_TO_LAT_VERSION
		);
	}
>>>>>>> update
}
