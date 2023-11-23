<?php
	/**
	 * A group of classes and methods to create and manage pages.
	 *
	 * @author Alex Kovalev <alex.kovalevv@gmail.com>
	 * @copyright (c) 2018, Webcraftic Ltd
	 *
	 * @package core
	 * @since 1.0.0
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

<<<<<<< HEAD
	add_action('admin_menu', 'Wbcr_FactoryPages449::actionAdminMenu');
	add_action('network_admin_menu', 'Wbcr_FactoryPages449::actionAdminMenu');

	if( !class_exists('Wbcr_FactoryPages449') ) {
=======
	add_action('admin_menu', 'Wbcr_FactoryPages467::actionAdminMenu');
	add_action('network_admin_menu', 'Wbcr_FactoryPages467::actionAdminMenu');

	if( !class_exists('Wbcr_FactoryPages467') ) {
>>>>>>> update
		/**
		 * A base class to manage pages.
		 *
		 * @since 1.0.0
		 */
<<<<<<< HEAD
		class Wbcr_FactoryPages449 {

			/**
			 * @var Wbcr_FactoryPages449_Page[]
=======
		class Wbcr_FactoryPages467 {

			/**
			 * @var Wbcr_FactoryPages467_Page[]
>>>>>>> update
			 */
			private static $pages = array();
			
			/**
<<<<<<< HEAD
			 * @param Wbcr_Factory450_Plugin $plugin
=======
			 * @param Wbcr_Factory469_Plugin $plugin
>>>>>>> update
			 * @param $class_name
			 */
			public static function register($plugin, $class_name)
			{
				if( !isset(self::$pages[$plugin->getPluginName()]) ) {
					self::$pages[$plugin->getPluginName()] = array();
				}
				$page = new $class_name($plugin);
				if( is_multisite() && is_network_admin() && !$page->available_for_multisite ) {
					return;
				}
				self::$pages[$plugin->getPluginName()][] = $page;
			}

			public static function actionAdminMenu()
			{
				if( empty(self::$pages) ) {
					return;
				}

				foreach(self::$pages as $plugin_pages) {
					foreach($plugin_pages as $page) {
						$page->connect();
					}
				}
			}

<<<<<<< HEAD
			public static function getPageUrl(Wbcr_Factory450_Plugin $plugin, $page_id, $args = array())
=======
			public static function getPageUrl(Wbcr_Factory469_Plugin $plugin, $page_id, $args = array())
>>>>>>> update
			{
				if( isset(self::$pages[$plugin->getPluginName()]) ) {
					$pages = self::$pages[$plugin->getPluginName()];

					foreach($pages as $page) {
						if( $page->id == $page_id ) {
							return $page->getBaseUrl($page_id, $args);
						}
					}
				} else {
					_doing_it_wrong(__METHOD__, __('You are trying to call this earlier than the plugin menu will be registered.'), '4.0.8');
				}
			}

			/**
<<<<<<< HEAD
			 * @param Wbcr_Factory450_Plugin $plugin
=======
			 * @param Wbcr_Factory469_Plugin $plugin
>>>>>>> update
			 * @return array
			 */
			public static function getIds($plugin)
			{
				if( !isset(self::$pages[$plugin->getPluginName()]) ) {
					return array();
				}

				$result = array();
				foreach(self::$pages[$plugin->getPluginName()] as $page)
					$result[] = $page->getResultId();

				return $result;
			}
		}
	}

<<<<<<< HEAD
	if( !function_exists('wbcr_factory_pages_449_get_page_id') ) {
		/**
		 *
		 * @param Wbcr_Factory450_Plugin $plugin
		 * @param string $page_id
		 * @return string
		 */
		function wbcr_factory_pages_449_get_page_id($plugin, $page_id)
=======
	if( !function_exists('wbcr_factory_pages_467_get_page_id') ) {
		/**
		 *
		 * @param Wbcr_Factory469_Plugin $plugin
		 * @param string $page_id
		 * @return string
		 */
		function wbcr_factory_pages_467_get_page_id($plugin, $page_id)
>>>>>>> update
		{
			return $page_id . '-' . $plugin->getPluginName();
		}
	}
