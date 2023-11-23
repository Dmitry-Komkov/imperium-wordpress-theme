<?php
/**
 * SettingsBase class file.
 *
 * @package cyr-to-lat
 */

<<<<<<< HEAD
namespace Cyr_To_Lat\Settings\Abstracts;
=======
namespace CyrToLat\Settings\Abstracts;
>>>>>>> update

/**
 * Class SettingsBase
 *
 * This is an abstract class to create the settings page in any plugin.
 * It uses WordPress Settings API and general output of fields of any type.
 * Similar approach is used in many plugins, including WooCommerce.
 */
abstract class SettingsBase {

	/**
	 * Admin script handle.
	 */
	const HANDLE = 'ctl-settings-base';

	/**
<<<<<<< HEAD
=======
	 * Network-wide option suffix.
	 */
	const NETWORK_WIDE = '_network_wide';

	/**
>>>>>>> update
	 * Form fields.
	 *
	 * @var array
	 */
<<<<<<< HEAD
	protected $form_fields;
=======
	protected $form_fields = [];
>>>>>>> update

	/**
	 * Plugin options.
	 *
	 * @var array
	 */
	protected $settings;

	/**
	 * Tabs of this settings page.
	 *
<<<<<<< HEAD
	 * @var array|null
=======
	 * @var array
>>>>>>> update
	 */
	protected $tabs;

	/**
<<<<<<< HEAD
=======
	 * Prefix for minified files.
	 *
	 * @var string
	 */
	protected $min_prefix;

	/**
>>>>>>> update
	 * Get screen id.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract public function screen_id();
=======
	abstract public function screen_id(): string;
>>>>>>> update

	/**
	 * Get option group.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function option_group();
=======
	abstract protected function option_group(): string;
>>>>>>> update

	/**
	 * Get option page.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function option_page();
=======
	abstract protected function option_page(): string;
>>>>>>> update

	/**
	 * Get option name.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function option_name();
=======
	abstract protected function option_name(): string;
>>>>>>> update

	/**
	 * Get plugin base name.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function plugin_basename();
=======
	abstract protected function plugin_basename(): string;
>>>>>>> update

	/**
	 * Get plugin url.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function plugin_url();
=======
	abstract protected function plugin_url(): string;
>>>>>>> update

	/**
	 * Get plugin version.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function plugin_version();
=======
	abstract protected function plugin_version(): string;
>>>>>>> update

	/**
	 * Get settings link label.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function settings_link_label();
=======
	abstract protected function settings_link_label(): string;
>>>>>>> update

	/**
	 * Get settings link text.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function settings_link_text();

	/**
	 * Init form fields.
	 */
	abstract protected function init_form_fields();
=======
	abstract protected function settings_link_text(): string;
>>>>>>> update

	/**
	 * Get page title.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function page_title();
=======
	abstract protected function page_title(): string;
>>>>>>> update

	/**
	 * Get menu title.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function menu_title();
=======
	abstract protected function menu_title(): string;
>>>>>>> update

	/**
	 * Show setting page.
	 */
	abstract public function settings_page();

	/**
	 * Get section title.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function section_title();
=======
	abstract protected function section_title(): string;
>>>>>>> update

	/**
	 * Show section.
	 *
	 * @param array $arguments Arguments.
	 */
<<<<<<< HEAD
	abstract public function section_callback( $arguments );

	/**
	 * Enqueue scripts in admin.
	 */
	abstract public function admin_enqueue_scripts();
=======
	abstract public function section_callback( array $arguments );
>>>>>>> update

	/**
	 * Get text domain.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	abstract protected function text_domain();
=======
	abstract protected function text_domain(): string;
>>>>>>> update

	/**
	 * SettingsBase constructor.
	 *
<<<<<<< HEAD
	 * @param array $tabs Tabs of this settings page.
=======
	 * @param array|null $tabs Tabs of this settings page.
	 *
	 * @noinspection PhpMissingParamTypeInspection
>>>>>>> update
	 */
	public function __construct( $tabs = [] ) {
		$this->tabs = $tabs;

		if ( ! $this->is_tab() ) {
			add_action( 'current_screen', [ $this, 'setup_tabs_section' ], 9 );
<<<<<<< HEAD
=======
			add_action( 'admin_menu', [ $this, 'add_settings_page' ] );
>>>>>>> update
		}

		$this->init();
	}

	/**
	 * Init class.
	 */
	public function init() {
<<<<<<< HEAD
		$this->init_form_fields();
=======
		$this->min_prefix = defined( 'SCRIPT_DEBUG' ) && constant( 'SCRIPT_DEBUG' ) ? '' : '.min';

		$this->form_fields();
>>>>>>> update
		$this->init_settings();

		if ( $this->is_tab_active( $this ) ) {
			$this->init_hooks();
		}
	}

	/**
	 * Init class hooks.
	 */
	protected function init_hooks() {
		add_action( 'plugins_loaded', [ $this, 'load_plugin_textdomain' ] );

		add_filter(
			'plugin_action_links_' . $this->plugin_basename(),
<<<<<<< HEAD
			[ $this, 'add_settings_link' ],
			10
		);

		add_action( 'admin_menu', [ $this, 'add_settings_page' ] );
		add_action( 'current_screen', [ $this, 'setup_sections' ] );
		add_action( 'current_screen', [ $this, 'setup_fields' ] );

		add_filter( 'pre_update_option_' . $this->option_name(), [ $this, 'pre_update_option_filter' ], 10, 2 );
=======
			[ $this, 'add_settings_link' ]
		);

		add_action( 'current_screen', [ $this, 'setup_fields' ] );
		add_action( 'current_screen', [ $this, 'setup_sections' ], 11 );

		add_filter( 'pre_update_option_' . $this->option_name(), [ $this, 'pre_update_option_filter' ], 10, 2 );
		add_filter( 'pre_update_site_option_option_' . $this->option_name(), [ $this, 'pre_update_option_filter' ], 10, 2 );
>>>>>>> update

		add_action( 'admin_enqueue_scripts', [ $this, 'base_admin_enqueue_scripts' ] );
	}

	/**
<<<<<<< HEAD
=======
	 * Init form fields.
	 */
	public function init_form_fields() {
		$this->form_fields = [];
	}

	/**
>>>>>>> update
	 * Get parent slug.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function parent_slug() {
=======
	protected function parent_slug(): string {
>>>>>>> update
		// By default, add menu pages to Options menu.
		return 'options-general.php';
	}

	/**
	 * Is this the main menu page.
	 *
	 * @return bool
	 */
<<<<<<< HEAD
	protected function is_main_menu_page() {
		// Main menu page should have empty string as parent slug.
		return ! (bool) $this->parent_slug();
=======
	protected function is_main_menu_page(): bool {
		// Main menu page should have empty string as parent slug.
		return ! $this->parent_slug();
>>>>>>> update
	}

	/**
	 * Get tab name.
	 *
	 * @return string
<<<<<<< HEAD
	 */
	protected function tab_name() {
=======
	 * @noinspection PhpUnused
	 */
	protected function tab_name(): string {
>>>>>>> update
		return $this->get_class_name();
	}

	/**
	 * Get class name without namespace.
	 *
	 * @return string
	 */
<<<<<<< HEAD
	protected function get_class_name() {
=======
	protected function get_class_name(): string {
>>>>>>> update
		$path = explode( '\\', get_class( $this ) );

		return array_pop( $path );
	}

	/**
	 * Is this a tab.
	 *
	 * @return bool
	 */
<<<<<<< HEAD
	protected function is_tab() {
=======
	protected function is_tab(): bool {
>>>>>>> update
		// Tab has null in tabs property.
		return null === $this->tabs;
	}

	/**
	 * Add link to plugin setting page on plugins page.
	 *
<<<<<<< HEAD
	 * @param array $actions      An array of plugin action links.
	 *                            By default this can include 'activate', 'deactivate', and 'delete'.
	 *                            With Multisite active this can also include
	 *                            'network_active' and 'network_only' items.
	 *
	 * @return array|string[] Plugin links
	 */
	public function add_settings_link( array $actions ) {
		$new_actions = [
			'settings' =>
				'<a href="' . admin_url( 'options-general.php?page=' . $this->option_page() ) .
=======
	 * @param array|mixed $actions An array of plugin action links.
	 *                             By default, this can include 'activate', 'deactivate', and 'delete'.
	 *                             With Multisite active this can also include 'network_active' and 'network_only'
	 *                             items.
	 *
	 * @return array|string[] Plugin links
	 */
	public function add_settings_link( $actions ): array {
		$new_actions = [
			'settings' =>
				'<a href="' . admin_url( $this->parent_slug() . '?page=' . $this->option_page() ) .
>>>>>>> update
				'" aria-label="' . esc_attr( $this->settings_link_label() ) . '">' .
				esc_html( $this->settings_link_text() ) . '</a>',
		];

<<<<<<< HEAD
		return array_merge( $new_actions, $actions );
=======
		return array_merge( $new_actions, (array) $actions );
>>>>>>> update
	}

	/**
	 * Initialise Settings.
	 *
	 * Store all settings in a single database entry
	 * and make sure the $settings array is either the default
	 * or the settings stored in the database.
	 */
	protected function init_settings() {
<<<<<<< HEAD
		$this->settings = get_option( $this->option_name(), null );

		$form_fields = $this->form_fields();

		if ( is_array( $this->settings ) ) {
			$this->settings = array_merge( wp_list_pluck( $form_fields, 'default' ), $this->settings );
=======
		$network_wide = get_site_option( $this->option_name() . self::NETWORK_WIDE, [] );

		if ( empty( $network_wide ) ) {
			$this->settings = get_option( $this->option_name(), null );
		} else {
			$this->settings = get_site_option( $this->option_name(), null );
		}

		$settings_exist                       = is_array( $this->settings );
		$this->settings                       = (array) $this->settings;
		$form_fields                          = $this->form_fields();
		$network_wide_setting                 = array_key_exists( self::NETWORK_WIDE, $this->settings ) ?
			$this->settings[ self::NETWORK_WIDE ] :
			$network_wide;
		$this->settings[ self::NETWORK_WIDE ] = $network_wide_setting;

		if ( $settings_exist ) {
			$this->settings = array_merge(
				wp_list_pluck( $form_fields, 'default' ),
				$this->settings
			);
>>>>>>> update

			return;
		}

		// If there are no settings defined, use defaults.
		$this->settings = array_merge(
			array_fill_keys( array_keys( $form_fields ), '' ),
			wp_list_pluck( $form_fields, 'default' )
		);
	}

	/**
<<<<<<< HEAD
=======
	 * Get all form fields.
	 *
	 * @return mixed
	 */
	protected function all_form_fields() {
		$form_fields[] = $this->form_fields();
		$tabs          = $this->tabs ?: [];

		/**
		 * Tab.
		 *
		 * @var SettingsBase $tab
		 */
		foreach ( $tabs as $tab ) {
			$form_fields[] = $tab->form_fields();
		}

		return array_merge( [], ...$form_fields );
	}

	/**
>>>>>>> update
	 * Get the form fields after initialization.
	 *
	 * @return array of options
	 */
<<<<<<< HEAD
	protected function form_fields() {
		if ( empty( $this->form_fields ) ) {
			$this->init_form_fields();
		}

		return array_map( [ $this, 'set_defaults' ], $this->form_fields );
=======
	protected function form_fields(): array {
		if ( empty( $this->form_fields ) ) {
			$this->init_form_fields();
			array_walk( $this->form_fields, [ $this, 'set_defaults' ] );
		}

		return $this->form_fields;
>>>>>>> update
	}

	/**
	 * Set default required properties for each field.
	 *
<<<<<<< HEAD
	 * @param array $field Settings field.
	 *
	 * @return array
	 */
	protected function set_defaults( $field ) {
		if ( ! isset( $field['default'] ) ) {
			$field['default'] = '';
		}

		return $field;
=======
	 * @param array  $field Settings field.
	 * @param string $id    Settings field id.
	 *
	 * @return void
	 * @noinspection PhpUnusedParameterInspection
	 */
	protected function set_defaults( array &$field, string $id ) {
		$field = wp_parse_args(
			$field,
			[
				'default'  => '',
				'disabled' => false,
				'field_id' => '',
				'label'    => '',
				'section'  => '',
				'title'    => '',
			]
		);
>>>>>>> update
	}

	/**
	 * Add settings page to the menu.
<<<<<<< HEAD
=======
	 *
	 * @return void
>>>>>>> update
	 */
	public function add_settings_page() {
		if ( $this->is_main_menu_page() ) {
			add_menu_page(
				$this->page_title(),
				$this->menu_title(),
				'manage_options',
				$this->option_page(),
				[ $this, 'settings_base_page' ]
			);

			return;
		}

		add_submenu_page(
			$this->parent_slug(),
			$this->page_title(),
			$this->menu_title(),
			'manage_options',
			$this->option_page(),
			[ $this, 'settings_base_page' ]
		);
	}

	/**
	 * Invoke relevant settings_page() basing on tabs.
	 */
	public function settings_base_page() {
<<<<<<< HEAD
		$this->get_active_tab()->settings_page();
	}

	/**
	 * Invoke relevant admin_enqueue_scripts() basing on tabs.
	 */
	public function base_admin_enqueue_scripts() {
=======
		echo '<div class="wrap">';

		$this->get_active_tab()->settings_page();

		echo '</div>';
	}

	/**
	 * Enqueue scripts in admin.
	 */
	public function admin_enqueue_scripts() {
	}

	/**
	 * Enqueue relevant admin_enqueue_scripts() basing on tabs.
	 * Enqueue admin style.
	 *
	 * @return void
	 */
	public function base_admin_enqueue_scripts() {
		if ( ! $this->is_options_screen() ) {
			return;
		}

>>>>>>> update
		$this->get_active_tab()->admin_enqueue_scripts();

		wp_enqueue_style(
			self::HANDLE,
<<<<<<< HEAD
			$this->plugin_url() . '/assets/css/settings-base.css',
=======
			$this->plugin_url() . "/assets/css/settings-base$this->min_prefix.css",
>>>>>>> update
			[],
			$this->plugin_version()
		);
	}

	/**
	 * Setup settings sections.
<<<<<<< HEAD
	 */
	public function setup_sections() {
		$tab = $this->get_active_tab();

		foreach ( $this->form_fields as $form_field ) {
			$title = isset( $form_field['title'] ) ? $form_field['title'] : '';
			add_settings_section(
				$form_field['section'],
				$title,
=======
	 *
	 * @return void
	 */
	public function setup_sections() {
		if ( ! $this->is_options_screen() ) {
			return;
		}

		$tab = $this->get_active_tab();

		if ( empty( $this->form_fields ) ) {
			add_settings_section(
				$this->section_title(),
				'',
				[ $tab, 'section_callback' ],
				$tab->option_page()
			);

			return;
		}

		foreach ( $this->form_fields as $form_field ) {
			add_settings_section(
				$form_field['section'],
				$form_field['title'],
>>>>>>> update
				[ $tab, 'section_callback' ],
				$tab->option_page()
			);
		}
	}

	/**
	 * Setup tabs section.
<<<<<<< HEAD
	 */
	public function setup_tabs_section() {
		/**
		 * Protection from the bug in \Automattic\Jetpack\Sync\Sender::get_items_to_send(),
		 * which sets screen without loading of wp-admin/includes/template.php,
		 * where add_settings_section() is defined.
		 */
		if ( ! function_exists( 'add_settings_section' ) ) {
=======
	 *
	 * @return void
	 */
	public function setup_tabs_section() {
		if ( ! $this->is_options_screen() ) {
>>>>>>> update
			return;
		}

		$tab = $this->get_active_tab();

		add_settings_section(
			'tabs_section',
			'',
			[ $this, 'tabs_callback' ],
			$tab->option_page()
		);
	}

	/**
	 * Show tabs.
	 */
	public function tabs_callback() {
		?>
		<div class="ctl-settings-tabs">
			<?php
			$this->tab_link( $this );

			foreach ( $this->tabs as $tab ) {
				$this->tab_link( $tab );
			}
			?>
		</div>
		<?php
	}

	/**
	 * Show tab link.
	 *
	 * @param SettingsBase $tab Tabs of the current settings page.
	 */
<<<<<<< HEAD
	private function tab_link( $tab ) {
=======
	private function tab_link( SettingsBase $tab ) {
>>>>>>> update
		$url    = menu_page_url( $this->option_page(), false );
		$url    = add_query_arg( 'tab', strtolower( $tab->get_class_name() ), $url );
		$active = $this->is_tab_active( $tab ) ? ' active' : '';

		?>
		<a class="ctl-settings-tab<?php echo esc_attr( $active ); ?>" href="<?php echo esc_url( $url ); ?>">
			<?php echo esc_html( $tab->page_title() ); ?>
		</a>
		<?php
	}

	/**
	 * Check if tab is active.
	 *
	 * @param SettingsBase $tab Tab of the current settings page.
	 *
	 * @return bool
	 */
<<<<<<< HEAD
	protected function is_tab_active( $tab ) {
		$current_tab_name = filter_input( INPUT_GET, 'tab', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

		if ( null === $current_tab_name && ! $tab->is_tab() ) {
=======
	protected function is_tab_active( SettingsBase $tab ): bool {
		$current_page_name = filter_input( INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
		$current_tab_name  = filter_input( INPUT_GET, 'tab', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

		if ( null === $current_page_name || null === $current_tab_name ) {
			$names             = $this->get_names_from_referer();
			$current_page_name = $names['page'];
			$current_tab_name  = $names['tab'];
		}

		if (
			( $current_page_name !== $this->option_page() || null === $current_tab_name ) &&
			! $tab->is_tab()
		) {
>>>>>>> update
			return true;
		}

		return strtolower( $tab->get_class_name() ) === $current_tab_name;
	}

	/**
<<<<<<< HEAD
	 * Get tabs.
	 *
	 * @return array|null
	 */
	public function get_tabs() {
=======
	 * Get page and tab names from referer.
	 *
	 * @return array
	 */
	protected function get_names_from_referer(): array {
		if ( wp_doing_ajax() ) {
			$query = wp_get_referer();
		} else {
			$query = filter_input( INPUT_POST, '_wp_http_referer', FILTER_SANITIZE_URL );
		}

		$query = wp_parse_url( (string) $query, PHP_URL_QUERY ) ?: '';
		$args  = $this->wp_parse_str( $query );

		return [
			'page' => $args['page'] ?? null,
			'tab'  => $args['tab'] ?? null,
		];
	}

	// @codeCoverageIgnoreStart

	/**
	 * Polyfill of the wp_parse_str().
	 * Added for test reasons.
	 *
	 * @param string $input_string Input string.
	 *
	 * @return array
	 */
	protected function wp_parse_str( string $input_string ): array {
		wp_parse_str( $input_string, $result );

		return $result;
	}

	// @codeCoverageIgnoreEnd

	/**
	 * Get tabs.
	 *
	 * @return array
	 * @noinspection PhpUnused
	 */
	public function get_tabs(): array {
>>>>>>> update
		return $this->tabs;
	}

	/**
	 * Get active tab.
	 *
	 * @return SettingsBase
	 */
<<<<<<< HEAD
	protected function get_active_tab() {
=======
	protected function get_active_tab(): SettingsBase {
>>>>>>> update
		if ( ! empty( $this->tabs ) ) {
			foreach ( $this->tabs as $tab ) {
				if ( $this->is_tab_active( $tab ) ) {
					return $tab;
				}
			}
		}

		return $this;
	}

	/**
	 * Setup settings fields.
<<<<<<< HEAD
=======
	 *
	 * @return void
>>>>>>> update
	 */
	public function setup_fields() {
		if ( ! $this->is_options_screen() ) {
			return;
		}

		register_setting( $this->option_group(), $this->option_name() );

		foreach ( $this->form_fields as $key => $field ) {
			$field['field_id'] = $key;

			add_settings_field(
				$key,
				$field['label'],
				[ $this, 'field_callback' ],
				$this->option_page(),
				$field['section'],
				$field
			);
		}
	}

	/**
	 * Print text/password field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 */
	private function print_text_field( array $arguments ) {
<<<<<<< HEAD
		$value = $this->get( $arguments['field_id'] );

		printf(
			'<input name="%1$s[%2$s]" id="%2$s" type="%3$s"' .
			' placeholder="%4$s" value="%5$s" class="regular-text" />',
=======
		$value        = $this->get( $arguments['field_id'] );
		$autocomplete = '';
		$lp_ignore    = 'false';

		if ( 'password' === $arguments['type'] ) {
			$autocomplete = 'new-password';
			$lp_ignore    = 'true';
		}

		printf(
			'<input %1$s name="%2$s[%3$s]" id="%3$s" type="%4$s"' .
			' placeholder="%5$s" value="%6$s" autocomplete="%7$s" data-lpignore="%8$s" class="regular-text" />',
			disabled( $arguments['disabled'], true, false ),
>>>>>>> update
			esc_html( $this->option_name() ),
			esc_attr( $arguments['field_id'] ),
			esc_attr( $arguments['type'] ),
			esc_attr( $arguments['placeholder'] ),
<<<<<<< HEAD
			esc_html( $value )
=======
			esc_html( $value ),
			esc_attr( $autocomplete ),
			esc_attr( $lp_ignore )
>>>>>>> update
		);
	}

	/**
	 * Print number field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 */
	private function print_number_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );
<<<<<<< HEAD
		$min   = isset( $arguments['min'] ) ? $arguments['min'] : '';
		$max   = isset( $arguments['max'] ) ? $arguments['max'] : '';

		printf(
			'<input name="%1$s[%2$s]" id="%2$s" type="%3$s"' .
			' placeholder="%4$s" value="%5$s" class="regular-text" min="%6$s" max="%7$s" />',
=======
		$min   = $arguments['min'];
		$max   = $arguments['max'];
		$step  = $arguments['step'];

		printf(
			'<input %1$s name="%2$s[%3$s]" id="%3$s" type="%4$s"' .
			' placeholder="%5$s" value="%6$s" class="regular-text" min="%7$s" max="%8$s" step="%9$s" />',
			disabled( $arguments['disabled'], true, false ),
>>>>>>> update
			esc_html( $this->option_name() ),
			esc_attr( $arguments['field_id'] ),
			esc_attr( $arguments['type'] ),
			esc_attr( $arguments['placeholder'] ),
			esc_html( $value ),
			esc_attr( $min ),
<<<<<<< HEAD
			esc_attr( $max )
=======
			esc_attr( $max ),
			esc_attr( $step )
>>>>>>> update
		);
	}

	/**
	 * Print textarea field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 */
<<<<<<< HEAD
	private function print_text_area_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );

		printf(
			'<textarea name="%1$s[%2$s]" id="%2$s" placeholder="%3$s" rows="5" cols="50">%4$s</textarea>',
=======
	private function print_textarea_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );

		printf(
			'<textarea %1$s name="%2$s[%3$s]" id="%3$s" placeholder="%4$s" rows="5" cols="50">%5$s</textarea>',
			disabled( $arguments['disabled'], true, false ),
>>>>>>> update
			esc_html( $this->option_name() ),
			esc_attr( $arguments['field_id'] ),
			esc_attr( $arguments['placeholder'] ),
			wp_kses_post( $value )
		);
	}

	/**
	 * Print checkbox field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 * @noinspection HtmlUnknownAttribute
	 */
<<<<<<< HEAD
	private function print_check_box_field( array $arguments ) {
		$value = (array) $this->get( $arguments['field_id'] );

		if ( empty( $arguments['options'] ) || ! is_array( $arguments['options'] ) ) {
			$arguments['options'] = [ 'yes' => '' ];
=======
	private function print_checkbox_field( array $arguments ) {
		$value = (array) $this->get( $arguments['field_id'] );

		if ( empty( $arguments['options'] ) || ! is_array( $arguments['options'] ) ) {
			$arguments['options'] = [ 'on' => '' ];
>>>>>>> update
		}

		$options_markup = '';
		$iterator       = 0;
<<<<<<< HEAD
		foreach ( $arguments['options'] as $key => $label ) {
			$iterator ++;
			$checked = false;
			if ( is_array( $value ) && in_array( $key, $value, true ) ) {
				$checked = checked( $key, $key, false );
			}
			$options_markup .= sprintf(
				'<label for="%2$s_%7$s">' .
				'<input id="%2$s_%7$s" name="%1$s[%2$s][]" type="%3$s" value="%4$s" %5$s />' .
=======

		if ( is_bool( $arguments['disabled'] ) ) {
			$arguments['disabled'] = $arguments['disabled'] ? $arguments['options'] : [];
		}

		foreach ( $arguments['options'] as $key => $label ) {
			++$iterator;
			$options_markup .= sprintf(
				'<label for="%2$s_%7$s">' .
				'<input id="%2$s_%7$s" name="%1$s[%2$s][]" type="%3$s" value="%4$s" %5$s %8$s />' .
>>>>>>> update
				' %6$s' .
				'</label>' .
				'<br/>',
				esc_html( $this->option_name() ),
				$arguments['field_id'],
				$arguments['type'],
				$key,
<<<<<<< HEAD
				$checked,
				$label,
				$iterator
			);
		}

		printf(
			'<fieldset>%s</fieldset>',
=======
				checked( in_array( $key, $value, true ), true, false ),
				$label,
				$iterator,
				disabled( in_array( $label, $arguments['disabled'], true ), true, false )
			);
		}

		$element_disabled = empty( array_diff( $arguments['options'], $arguments['disabled'] ) );

		printf(
			'<fieldset %1$s>%2$s</fieldset>',
			disabled( $element_disabled, true, false ),
>>>>>>> update
			wp_kses(
				$options_markup,
				[
					'label' => [
						'for' => [],
					],
					'input' => [
<<<<<<< HEAD
						'id'      => [],
						'name'    => [],
						'type'    => [],
						'value'   => [],
						'checked' => [],
=======
						'id'       => [],
						'name'     => [],
						'type'     => [],
						'value'    => [],
						'checked'  => [],
						'disabled' => [],
>>>>>>> update
					],
					'br'    => [],
				]
			)
		);
	}

	/**
	 * Print radio field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 * @noinspection HtmlUnknownAttribute
	 */
	private function print_radio_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );

		if ( empty( $arguments['options'] ) || ! is_array( $arguments['options'] ) ) {
			return;
		}

		$options_markup = '';
		$iterator       = 0;
<<<<<<< HEAD
		foreach ( $arguments['options'] as $key => $label ) {
			$iterator ++;
			$options_markup .= sprintf(
				'<label for="%2$s_%7$s">' .
				'<input id="%2$s_%7$s" name="%1$s[%2$s]" type="%3$s" value="%4$s" %5$s />' .
=======

		if ( is_bool( $arguments['disabled'] ) ) {
			$arguments['disabled'] = $arguments['disabled'] ? $arguments['options'] : [];
		}

		foreach ( $arguments['options'] as $key => $label ) {
			++$iterator;
			$options_markup .= sprintf(
				'<label for="%2$s_%7$s">' .
				'<input id="%2$s_%7$s" name="%1$s[%2$s]" type="%3$s" value="%4$s" %5$s %8$s />' .
>>>>>>> update
				' %6$s' .
				'</label>' .
				'<br/>',
				esc_html( $this->option_name() ),
				$arguments['field_id'],
				$arguments['type'],
				$key,
				checked( $value, $key, false ),
				$label,
<<<<<<< HEAD
				$iterator
			);
		}

		printf(
			'<fieldset>%s</fieldset>',
=======
				$iterator,
				disabled( in_array( $label, $arguments['disabled'], true ), true, false )
			);
		}

		$element_disabled = empty( array_diff( $arguments['options'], $arguments['disabled'] ) );

		printf(
			'<fieldset %1$s>%2$s</fieldset>',
			disabled( $element_disabled, true, false ),
>>>>>>> update
			wp_kses(
				$options_markup,
				[
					'label' => [
						'for' => [],
					],
					'input' => [
<<<<<<< HEAD
						'id'      => [],
						'name'    => [],
						'type'    => [],
						'value'   => [],
						'checked' => [],
=======
						'id'       => [],
						'name'     => [],
						'type'     => [],
						'value'    => [],
						'checked'  => [],
						'disabled' => [],
>>>>>>> update
					],
					'br'    => [],
				]
			)
		);
	}

	/**
	 * Print select field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 * @noinspection HtmlUnknownAttribute
	 */
	private function print_select_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );

		if ( empty( $arguments['options'] ) || ! is_array( $arguments['options'] ) ) {
			return;
		}

		$options_markup = '';
<<<<<<< HEAD
		foreach ( $arguments['options'] as $key => $label ) {
			$options_markup .= sprintf(
				'<option value="%s" %s>%s</option>',
				$key,
				selected( $value, $key, false ),
=======

		if ( is_bool( $arguments['disabled'] ) ) {
			$arguments['disabled'] = $arguments['disabled'] ? $arguments['options'] : [];
		}

		foreach ( $arguments['options'] as $key => $label ) {
			$options_markup .= sprintf(
				'<option value="%s" %s %s>%s</option>',
				$key,
				selected( $value, $key, false ),
				disabled( in_array( $label, $arguments['disabled'], true ), true, false ),
>>>>>>> update
				$label
			);
		}

<<<<<<< HEAD
		printf(
			'<select name="%1$s[%2$s]">%3$s</select>',
=======
		$element_disabled = empty( array_diff( $arguments['options'], $arguments['disabled'] ) );

		printf(
			'<select %1$s name="%2$s[%3$s]">%4$s</select>',
			disabled( $element_disabled, true, false ),
>>>>>>> update
			esc_html( $this->option_name() ),
			esc_html( $arguments['field_id'] ),
			wp_kses(
				$options_markup,
				[
					'option' => [
						'value'    => [],
						'selected' => [],
<<<<<<< HEAD
=======
						'disabled' => [],
>>>>>>> update
					],
				]
			)
		);
	}

	/**
	 * Print multiple select field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 * @noinspection HtmlUnknownAttribute
	 */
	private function print_multiple_select_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );

		if ( empty( $arguments['options'] ) || ! is_array( $arguments['options'] ) ) {
			return;
		}

		$options_markup = '';
<<<<<<< HEAD
		foreach ( $arguments['options'] as $key => $label ) {
			$selected = '';
			if ( is_array( $value ) && in_array( $key, $value, true ) ) {
				$selected = selected( $key, $key, false );
			}
			$options_markup .= sprintf(
				'<option value="%s" %s>%s</option>',
				$key,
				$selected,
=======

		if ( is_bool( $arguments['disabled'] ) ) {
			$arguments['disabled'] = $arguments['disabled'] ? $arguments['options'] : [];
		}

		foreach ( $arguments['options'] as $key => $label ) {
			$selected = '';

			if ( is_array( $value ) && in_array( $key, $value, true ) ) {
				$selected = selected( $key, $key, false );
			}

			$options_markup .= sprintf(
				'<option value="%s" %s %s>%s</option>',
				$key,
				$selected,
				disabled( in_array( $label, $arguments['disabled'], true ), true, false ),
>>>>>>> update
				$label
			);
		}

<<<<<<< HEAD
		printf(
			'<select multiple="multiple" name="%1$s[%2$s][]">%3$s</select>',
=======
		$element_disabled = empty( array_diff( $arguments['options'], $arguments['disabled'] ) );

		printf(
			'<select %1$s multiple="multiple" name="%2$s[%3$s][]">%4$s</select>',
			disabled( $element_disabled, true, false ),
>>>>>>> update
			esc_html( $this->option_name() ),
			esc_html( $arguments['field_id'] ),
			wp_kses(
				$options_markup,
				[
					'option' => [
						'value'    => [],
						'selected' => [],
<<<<<<< HEAD
=======
						'disabled' => [],
>>>>>>> update
					],
				]
			)
		);
	}

	/**
	 * Print table field.
	 *
	 * @param array $arguments Field arguments.
	 *
	 * @noinspection PhpUnusedPrivateMethodInspection
	 */
	private function print_table_field( array $arguments ) {
		$value = $this->get( $arguments['field_id'] );

		if ( ! is_array( $value ) ) {
			return;
		}

<<<<<<< HEAD
		$iterator = 0;
=======
		printf(
			'<fieldset %s>',
			disabled( $arguments['disabled'], true, false )
		);

		$iterator = 0;

>>>>>>> update
		foreach ( $value as $key => $cell_value ) {
			$id = $arguments['field_id'] . '-' . $iterator;

			echo '<div class="ctl-table-cell">';
			printf(
				'<label for="%1$s">%2$s</label>',
				esc_html( $id ),
				esc_html( $key )
			);
			printf(
				'<input name="%1$s[%2$s][%3$s]" id="%4$s" type="%5$s"' .
				' placeholder="%6$s" value="%7$s" class="regular-text" />',
				esc_html( $this->option_name() ),
				esc_attr( $arguments['field_id'] ),
				esc_attr( $key ),
				esc_attr( $id ),
				'text',
				esc_attr( $arguments['placeholder'] ),
				esc_html( $cell_value )
			);
			echo '</div>';

<<<<<<< HEAD
			$iterator ++;
		}
=======
			++$iterator;
		}

		echo '</fieldset>';
>>>>>>> update
	}

	/**
	 * Output settings field.
	 *
	 * @param array $arguments Field arguments.
	 */
	public function field_callback( array $arguments ) {
<<<<<<< HEAD
		if ( ! isset( $arguments['field_id'] ) ) {
=======
		if ( empty( $arguments['field_id'] ) ) {
>>>>>>> update
			return;
		}

		$types = [
			'text'     => 'print_text_field',
			'password' => 'print_text_field',
			'number'   => 'print_number_field',
<<<<<<< HEAD
			'textarea' => 'print_text_area_field',
			'checkbox' => 'print_check_box_field',
=======
			'textarea' => 'print_textarea_field',
			'checkbox' => 'print_checkbox_field',
>>>>>>> update
			'radio'    => 'print_radio_field',
			'select'   => 'print_select_field',
			'multiple' => 'print_multiple_select_field',
			'table'    => 'print_table_field',
		];

<<<<<<< HEAD
		$type = $arguments['type'];
=======
		$type = $arguments['type'] ?? '';
>>>>>>> update

		if ( ! array_key_exists( $type, $types ) ) {
			return;
		}

<<<<<<< HEAD
		// If there is help text.
		$helper = $arguments['helper'];
		if ( $helper ) {
			printf(
				'<span class="helper"><span class="helper-content">%s</span></span>',
				wp_kses_post( $helper )
			);
		}

		$this->{$types[ $type ]}( $arguments );

		// If there is supplemental text.
		$supplemental = $arguments['supplemental'];
		if ( $supplemental ) {
			printf( '<p class="description">%s</p>', wp_kses_post( $supplemental ) );
		}
=======
		$arguments = wp_parse_args(
			$arguments,
			[
				'field_id'     => '',
				'helper'       => '',
				'label'        => '',
				'max'          => '',
				'min'          => '',
				'step'         => '',
				'options'      => [],
				'placeholder'  => '',
				'supplemental' => '',
				'type'         => '',
			]
		);

		$this->{$types[ $type ]}( $arguments );

		$this->print_helper( $arguments['helper'] );
		$this->print_supplemental( $arguments['supplemental'] );
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
=======
	public function get( string $key, $empty_value = null ) {
>>>>>>> update
		if ( empty( $this->settings ) ) {
			$this->init_settings();
		}

		// Get option default if unset.
		if ( ! isset( $this->settings[ $key ] ) ) {
<<<<<<< HEAD
			$form_fields            = $this->form_fields();
=======
			$form_fields            = $this->all_form_fields();
>>>>>>> update
			$this->settings[ $key ] = isset( $form_fields[ $key ] ) ? $this->field_default( $form_fields[ $key ] ) : '';
		}

		if ( '' === $this->settings[ $key ] && ! is_null( $empty_value ) ) {
			$this->settings[ $key ] = $empty_value;
		}

		return $this->settings[ $key ];
	}

	/**
	 * Get a field default value. Defaults to '' if not set.
	 *
	 * @param array $field Setting field default value.
	 *
<<<<<<< HEAD
	 * @return string
=======
	 * @return mixed
>>>>>>> update
	 */
	protected function field_default( array $field ) {
		return empty( $field['default'] ) ? '' : $field['default'];
	}

	/**
<<<<<<< HEAD
=======
	 * Set field.
	 *
	 * @param string $key       Setting name.
	 * @param string $field_key Field key.
	 * @param mixed  $value     Value.
	 *
	 * @return bool True if done.
	 */
	public function set_field( string $key, string $field_key, $value ): bool {
		if ( ! array_key_exists( $key, $this->form_fields ) ) {
			return false;
		}

		$this->form_fields[ $key ][ $field_key ] = $value;

		return true;
	}

	/**
>>>>>>> update
	 * Update plugin option.
	 *
	 * @param string $key   Setting name.
	 * @param mixed  $value Setting value.
	 */
<<<<<<< HEAD
	public function update_option( $key, $value ) {
=======
	public function update_option( string $key, $value ) {
>>>>>>> update
		if ( empty( $this->settings ) ) {
			$this->init_settings();
		}

		$this->settings[ $key ] = $value;
		update_option( $this->option_name(), $this->settings );
	}

	/**
	 * Filter plugin option update.
	 *
	 * @param mixed $value     New option value.
	 * @param mixed $old_value Old option value.
	 *
	 * @return mixed
	 */
	public function pre_update_option_filter( $value, $old_value ) {
		if ( $value === $old_value ) {
			return $value;
		}

<<<<<<< HEAD
		// We save only one table, so merge with all existing tables.
		if ( is_array( $old_value ) && ( is_array( $value ) ) ) {
			$value = array_merge( $old_value, $value );
		}

		$form_fields = $this->form_fields();
		foreach ( $form_fields as $key => $form_field ) {
			if ( 'checkbox' === $form_field['type'] ) {
				$form_field_value = isset( $value[ $key ] ) ? $value[ $key ] : 'no';
				$form_field_value = '1' === $form_field_value || 'yes' === $form_field_value ? 'yes' : 'no';
				$value[ $key ]    = $form_field_value;
			}
		}

		return $value;
=======
		$value       = is_array( $value ) ? $value : [];
		$old_value   = is_array( $old_value ) ? $old_value : [];
		$form_fields = $this->form_fields();

		foreach ( $form_fields as $key => $form_field ) {
			if ( 'checkbox' !== $form_field['type'] || isset( $value[ $key ] ) ) {
				continue;
			}

			if ( ! $form_field['disabled'] || ! isset( $old_value[ $key ] ) ) {
				$value[ $key ] = [];
			}
		}

		// We save only one tab, so merge with all existing tabs.
		$value                       = array_merge( $old_value, $value );
		$value[ self::NETWORK_WIDE ] = array_key_exists( self::NETWORK_WIDE, $value ) ? $value[ self::NETWORK_WIDE ] : [];

		update_site_option( $this->option_name() . self::NETWORK_WIDE, $value[ self::NETWORK_WIDE ] );

		if ( empty( $value[ self::NETWORK_WIDE ] ) ) {
			return $value;
		}

		update_site_option( $this->option_name(), $value );

		return $old_value;
>>>>>>> update
	}

	/**
	 * Load plugin text domain.
<<<<<<< HEAD
=======
	 *
	 * @return void
>>>>>>> update
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			$this->text_domain(),
			false,
			dirname( $this->plugin_basename() ) . '/languages/'
		);
	}

	/**
	 * Is current admin screen the plugin options screen.
	 *
	 * @return bool
	 */
<<<<<<< HEAD
	protected function is_options_screen() {
=======
	protected function is_options_screen(): bool {
>>>>>>> update
		if ( ! function_exists( 'get_current_screen' ) ) {
			return false;
		}

		$current_screen = get_current_screen();

<<<<<<< HEAD
		$screen_id = $this->screen_id();
=======
		if ( ! $current_screen ) {
			return false;
		}

		$screen_id = $this->screen_id();

>>>>>>> update
		if ( $this->is_main_menu_page() ) {
			$screen_id = str_replace( 'settings_page', 'toplevel_page', $screen_id );
		}

<<<<<<< HEAD
		return $current_screen && ( 'options' === $current_screen->id || $screen_id === $current_screen->id );
=======
		return 'options' === $current_screen->id || $screen_id === $current_screen->id;
	}

	/**
	 * Print help text if it exists.
	 *
	 * @param string $helper Helper.
	 *
	 * @return void
	 */
	private function print_helper( string $helper ) {
		if ( ! $helper ) {
			return;
		}

		printf(
			'<span class="helper"><span class="helper-content">%s</span></span>',
			wp_kses_post( $helper )
		);
	}

	/**
	 * Print supplemental id it exists.
	 *
	 * @param string $supplemental Supplemental.
	 *
	 * @return void
	 */
	private function print_supplemental( string $supplemental ) {
		if ( ! $supplemental ) {
			return;
		}

		printf(
			'<p class="description">%s</p>',
			wp_kses_post( $supplemental )
		);
>>>>>>> update
	}
}
