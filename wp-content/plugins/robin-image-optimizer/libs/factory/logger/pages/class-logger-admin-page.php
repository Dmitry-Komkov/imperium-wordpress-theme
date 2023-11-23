<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс отвечает за работу страницы логов.
 *
 * @author        Artem Prihodko <webtemyk@yandex.ru>
 * @copyright (c) 2020, Webcraftic
 * @version       1.0
 */
<<<<<<< HEAD
class Wbcr_FactoryLogger115_AdminPage extends Wbcr_FactoryPages449_AdminPage {
=======
class Wbcr_FactoryLogger133_AdminPage extends Wbcr_FactoryPages467_AdminPage {
>>>>>>> update

	/**
	 * {@inheritdoc}
	 */
	public $id; // Уникальный идентификатор страницы

	/**
	 * {@inheritdoc}
	 */
	public $page_menu_dashicon = 'dashicons-admin-tools';

	/**
	 * {@inheritdoc}
	 */
	public $type = 'page';

	/**
<<<<<<< HEAD
	 * @param Wbcr_Factory450_Plugin $plugin
=======
	 * @param Wbcr_Factory469_Plugin $plugin
>>>>>>> update
	 */
	public function __construct( $plugin ) {
		$this->id = $plugin->getPrefix() . "logger";

<<<<<<< HEAD
		$this->menu_title  = __( 'Plugin Log', 'wbcr_factory_logger_115' );
		$this->page_title  = __( 'Plugin log', 'wbcr_factory_logger_115' );
		$this->capabilitiy = "manage_options";

		add_action( 'wp_ajax_wbcr_factory_logger_115_logs_cleanup', [ $this, 'ajax_cleanup' ] );
=======
		$this->menu_title  = __( 'Plugin Log', 'wbcr_factory_logger_133' );
		$this->page_title  = __( 'Plugin log', 'wbcr_factory_logger_133' );
		$this->capabilitiy = "manage_options";

		add_action( 'wp_ajax_wbcr_factory_logger_133_'.$plugin->getPrefix().'logs_cleanup', [ $this, 'ajax_cleanup' ] );
>>>>>>> update

		parent::__construct( $plugin );
	}

	/**
	 * {@inheritdoc}
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function assets( $scripts, $styles ) {
		parent::assets( $scripts, $styles );

<<<<<<< HEAD
		$this->styles->add( FACTORY_LOGGER_115_URL . '/assets/css/logger.css' );
		$this->scripts->add( FACTORY_LOGGER_115_URL . '/assets/js/logger.js', [ 'jquery' ], 'wbcr_factory_logger_115', FACTORY_LOGGER_115_VERSION );
		wp_localize_script( 'wbcr_factory_logger_115', 'wbcr_factory_logger_115', [
			'clean_logs_nonce' => wp_create_nonce( 'wbcr_factory_logger_115_clean_logs' ),
=======
		$this->styles->add( FACTORY_LOGGER_133_URL . '/assets/css/logger.css' );
		$this->scripts->add( FACTORY_LOGGER_133_URL . '/assets/js/logger.js', [ 'jquery' ], 'wbcr_factory_logger_133', FACTORY_LOGGER_133_VERSION );
		wp_localize_script( 'wbcr_factory_logger_133', 'wbcr_factory_logger_133', [
			'clean_logs_nonce' => wp_create_nonce( 'wbcr_factory_logger_133_clean_logs' ),
			'plugin_prefix' => $this->plugin->getPrefix(),
>>>>>>> update
		] );
	}

	/**
	 * {@inheritdoc}
	 */
	public function getMenuTitle() {
<<<<<<< HEAD
		return __( 'Plugin Log', 'wbcr_factory_logger_115' );
=======
		return __( 'Plugin Log', 'wbcr_factory_logger_133' );
>>>>>>> update
	}

	/**
	 * Show rendered template - $template_name
	 */
	public function indexAction() {
		$this->showPageContent();
	}

	/**
	 * {@inheritdoc}
	 */
	public function showPageContent() {
		$buttons = "
            <div class='wbcr_factory_logger_buttons'>
                <a href='" . wp_nonce_url( $this->getActionUrl( 'export' ) ) . "'
<<<<<<< HEAD
                   class='button button-primary'>" . __( 'Export Debug Information', 'wbcr_factory_logger_115' ) . "</a>
                <a href='#'
                   class='button button-secondary'
                   onclick='wbcr_factory_logger_115_LogCleanup(this);return false;'
                   data-working='" . __( 'Working...', 'wbcr_factory_logger_115' ) . "'>" .
		           sprintf( __( 'Clean-up Logs (<span id="wbcr-log-size">%s</span>)', 'wbcr_factory_logger_115' ), $this->get_log_size_formatted() ) . "
=======
                   class='button button-primary'>" . __( 'Export Debug Information', 'wbcr_factory_logger_133' ) . "</a>
                <a href='#'
                   class='button button-secondary'
                   onclick='wbcr_factory_logger_133_LogCleanup(this);return false;'
                   data-working='" . __( 'Working...', 'wbcr_factory_logger_133' ) . "'>" .
		           sprintf( __( 'Clean-up Logs (<span id="wbcr-log-size">%s</span>)', 'wbcr_factory_logger_133' ), $this->get_log_size_formatted() ) . "
>>>>>>> update
                   </a>
            </div>";

		?>
        <div class="wbcr_factory_logger_container">
            <div class="wbcr_factory_logger_page_title">
<<<<<<< HEAD
                <h1><?php _e( 'Logs of the', 'wbcr_factory_logger_115' ) ?>
                    &nbsp;<?php echo $this->plugin->getPluginTitle() . " " . $this->plugin->getPluginVersion(); ?></h1>
                <p>
					<?php _e( 'In this section, you can track how the plugin works. Sending this log to the developer will help you resolve possible issues.', 'wbcr_factory_logger_115' ) ?>
                </p>
            </div>
			<?= $buttons; ?>
            <div class="wbcr-log-viewer" id="wbcr-log-viewer">
				<?php echo $this->plugin->logger->prettify() ?>
            </div>
			<?= $buttons; ?>
=======
                <h1><?php _e( 'Logs of the', 'wbcr_factory_logger_133' ) ?>
                    &nbsp;<?php echo $this->plugin->getPluginTitle() . " " . $this->plugin->getPluginVersion(); ?></h1>
                <p>
					<?php _e( 'In this section, you can track how the plugin works. Sending this log to the developer will help you resolve possible issues.', 'wbcr_factory_logger_133' ) ?>
                </p>
            </div>
			<?php echo $buttons; ?>
            <div class="wbcr-log-viewer" id="wbcr-log-viewer">
				<?php echo $this->plugin->logger->prettify() ?>
            </div>
			<?php echo $buttons; ?>
>>>>>>> update
        </div>
		<?php
	}

	public function ajax_cleanup() {
<<<<<<< HEAD
		check_admin_referer( 'wbcr_factory_logger_115_clean_logs', 'nonce' );
=======
		check_admin_referer( 'wbcr_factory_logger_133_clean_logs', 'nonce' );
>>>>>>> update

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( - 1 );
		}

		if ( ! $this->plugin->logger->clean_up() ) {
			wp_send_json_error( [
<<<<<<< HEAD
				'message' => esc_html__( 'Failed to clean-up logs. Please try again later.', 'wbcr_factory_logger_115' ),
=======
				'message' => esc_html__( 'Failed to clean-up logs. Please try again later.', 'wbcr_factory_logger_133' ),
>>>>>>> update
				'type'    => 'danger',
			] );
		}

		wp_send_json( [
<<<<<<< HEAD
			'message' => esc_html__( 'Logs clean-up successfully', 'wbcr_factory_logger_115' ),
=======
			'message' => esc_html__( 'Logs clean-up successfully', 'wbcr_factory_logger_133' ),
>>>>>>> update
			'type'    => 'success',
		] );
	}

	/**
	 * Processing log export action in form of ZIP archive.
	 */
	public function exportAction() {
<<<<<<< HEAD
		$export = new WBCR\Factory_Logger_115\Log_Export( $this->plugin->logger );
=======
		$export = new WBCR\Factory_Logger_133\Log_Export( $this->plugin->logger );
>>>>>>> update

		if ( $export->prepare() ) {
			$export->download( true );
		}
	}

	/**
	 * Get log size formatted.
	 *
	 * @return false|string
	 */
	private function get_log_size_formatted() {

		try {
			return size_format( $this->plugin->logger->get_total_size() );
		} catch ( \Exception $exception ) {
			$this->plugin->logger->error( sprintf( 'Failed to get total log size as exception was thrown: %s', $exception->getMessage() ) );
		}

		return '';
	}
}
