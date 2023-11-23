<?php
/**
 * Factory Templates
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, Github: https://github.com/alexkovalevv
 * @since         1.0.2
 * @package       clearfy
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

<<<<<<< HEAD
if( defined('FACTORY_TEMPLATES_102_LOADED') ) {
	return;
}

define('FACTORY_TEMPLATES_102_LOADED', true);

define('FACTORY_TEMPLATES_102', '1.0.2');

define('FACTORY_TEMPLATES_102_DIR', dirname(__FILE__));
define('FACTORY_TEMPLATES_102_URL', plugins_url(null, __FILE__));

load_plugin_textdomain('wbcr_factory_templates_102', false, dirname(plugin_basename(__FILE__)) . '/langs');

require(FACTORY_TEMPLATES_102_DIR . '/includes/ajax-handlers.php');
require(FACTORY_TEMPLATES_102_DIR . '/includes/class-helpers.php');
require(FACTORY_TEMPLATES_102_DIR . '/includes/class-configurate.php');
=======
if( defined('FACTORY_TEMPLATES_118_LOADED') ) {
	return;
}

define('FACTORY_TEMPLATES_118_LOADED', true);

define('FACTORY_TEMPLATES_118', '1.1.8');

define('FACTORY_TEMPLATES_118_DIR', dirname(__FILE__));
define('FACTORY_TEMPLATES_118_URL', plugins_url(null, __FILE__));

load_plugin_textdomain('wbcr_factory_templates_118', false, dirname(plugin_basename(__FILE__)) . '/langs');

require(FACTORY_TEMPLATES_118_DIR . '/includes/ajax-handlers.php');
require(FACTORY_TEMPLATES_118_DIR . '/includes/class-helpers.php');
require(FACTORY_TEMPLATES_118_DIR . '/includes/class-configurate.php');
>>>>>>> update

// module provides function only for the admin area
if( is_admin() ) {
	/**
	 * Подключаем скрипты для установки компонентов Clearfy
	 * на все страницы админпанели.
	 */
	add_action('admin_enqueue_scripts', function ($hook) {
<<<<<<< HEAD
		wp_enqueue_script('wbcr-factory-templates-102-global', FACTORY_TEMPLATES_102_URL . '/assets/js/clearfy-globals.js', [
			'jquery',
			'wfactory-450-core-general'
		], FACTORY_TEMPLATES_102);

		require_once FACTORY_TEMPLATES_102_DIR . '/includes/class-search-options.php';
		$all_options = \WBCR\Factory_Templates_102\Search_Options::get_all_options();
=======
		wp_enqueue_script('wbcr-factory-templates-118-global', FACTORY_TEMPLATES_118_URL . '/assets/js/clearfy-globals.js', [
			'jquery',
			'wfactory-469-core-general'
		], FACTORY_TEMPLATES_118);

		require_once FACTORY_TEMPLATES_118_DIR . '/includes/class-search-options.php';
		$all_options = \WBCR\Factory_Templates_118\Search_Options::get_all_options();
>>>>>>> update

		if( empty($all_options) ) {
			return;
		}

		$allow_print_data = false;
		$formated_options = [];

		foreach($all_options as $option) {
			//if( !$allow_print_data && isset($_GET['page']) && $option['page_id'] === $_GET['page'] ) {
			//$allow_print_data = true;
			//}

			$formated_options[] = [
				'value' => $option['title'],
				'data' => [
					//'hint' => isset($option['hint']) ? $option['hint'] : '',
					'page_url' => $option['page_url'],
					'page_id' => $option['page_id']
				]
			];
		}

		//if( !$allow_print_data ) {
		//return;
		//}

<<<<<<< HEAD
		wp_localize_script('wbcr-factory-templates-102-global', 'wfactory_clearfy_search_options', $formated_options);
	});

	if( defined('FACTORY_PAGES_449_LOADED') ) {
		require(FACTORY_TEMPLATES_102_DIR . '/pages/templates/impressive/class-page-template-impressive.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/templates/impressive/class-pages.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/templates/impressive-lite/class-page-template-impressive-lite.php');

		require(FACTORY_TEMPLATES_102_DIR . '/pages/class-page-more-features.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/class-page-license.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/class-pages-components.php');

		require(FACTORY_TEMPLATES_102_DIR . '/pages/setup-parts/class-step.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/setup-parts/class-step-form.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/setup-parts/class-step-custom.php');
		require(FACTORY_TEMPLATES_102_DIR . '/pages/class-page-setup.php');
=======
		wp_localize_script('wbcr-factory-templates-118-global', 'wfactory_clearfy_search_options', $formated_options);
	});

	if( defined('FACTORY_PAGES_467_LOADED') ) {
		require(FACTORY_TEMPLATES_118_DIR . '/pages/templates/impressive/class-page-template-impressive.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/templates/impressive/class-pages.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/templates/impressive-lite/class-page-template-impressive-lite.php');

		require(FACTORY_TEMPLATES_118_DIR . '/pages/class-page-more-features.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/class-page-license.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/class-pages-components.php');

		require(FACTORY_TEMPLATES_118_DIR . '/pages/setup-parts/class-step.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/setup-parts/class-step-form.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/setup-parts/class-step-custom.php');
		require(FACTORY_TEMPLATES_118_DIR . '/pages/class-page-setup.php');
>>>>>>> update
	}
}