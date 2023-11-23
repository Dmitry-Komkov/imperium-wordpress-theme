<?php
/**
 * Admin page class
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>
 * @since         1.0.0
 * @package       factory-core
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

<<<<<<< HEAD
if ( ! class_exists( 'Wbcr_FactoryPages449_Page' ) ) {

	class Wbcr_FactoryPages449_Page {
=======
if ( ! class_exists( 'Wbcr_FactoryPages467_Page' ) ) {

	class Wbcr_FactoryPages467_Page {
>>>>>>> update


		/**
		 * Уникальный ID страницы
		 *
		 * ID страницы используется для формирования ссылки на страницу.
		 *
		 * Ссылки выглядят примерно так:
		 * http://clearfy-test.loc/wp-admin/admin.php?page=components-wbcr_clearfy
		 *
		 * Чтобы не было конфликтов с другими плагинами, используйте префиксы.
		 *
		 * @since 1.0.0
<<<<<<< HEAD
		 * @see   FactoryPages449_AdminPage
=======
		 * @see   FactoryPages467_AdminPage
>>>>>>> update
		 *
		 * @var string
		 */
		public $id;

		/**
		 * Current Factory Plugin.
		 *
<<<<<<< HEAD
		 * @var Wbcr_Factory450_Plugin
=======
		 * @var Wbcr_Factory469_Plugin
>>>>>>> update
		 */
		public $plugin;

		/**
		 * @var string
		 */
		public $result;

		//private $default_actions = array();

		/**
<<<<<<< HEAD
		 * @param Wbcr_Factory450_Plugin $plugin
		 *
		 * @throws Exception
		 */
		public function __construct( Wbcr_Factory450_Plugin $plugin ) {
=======
		 * @param Wbcr_Factory469_Plugin $plugin
		 *
		 * @throws Exception
		 */
		public function __construct( Wbcr_Factory469_Plugin $plugin ) {
>>>>>>> update
			$this->plugin = $plugin;

			if ( $plugin ) {
				$this->scripts = $this->plugin->newScriptList();
				$this->styles  = $this->plugin->newStyleList();
				$this->request = $plugin->request;
			}
		}

		/*public function __call($name, $arguments) {


			if(!empty($custom_action)) {

			}

		}*/

		public function assets( $scripts, $styles ) {
		}

		/**
		 * Shows page.
		 */
		public function show() {

			if ( $this->result ) {
				echo $this->result;
			} else {
				$action = isset( $_GET['action'] ) ? $_GET['action'] : 'index';
				$this->executeByName( $action );
			}
		}

		/**
		 * @param string $action
		 *
		 * @throws Exception
		 */
		public function executeByName( $action ) {
			$raw_action_name = $action;

			if ( preg_match( '/[-_]+/', $action ) ) {
				$action = $this->dashesToCamelCase( $action, false );
			}
			$actionFunction = $action . 'Action';

			$cancel = $this->OnActionExecuting( $action );

			if ( $cancel === false ) {
				return;
			}

			if ( ! method_exists( $this, $actionFunction ) ) {
				// todo: продумать и доработать выполнение произвольных и глобальных дейтсвия для всех страниц
<<<<<<< HEAD
				/*$custom_actions = apply_filters('wbcr/factory_pages_449/custom_actions', array(), $raw_action_name);
=======
				/*$custom_actions = apply_filters('wbcr/factory_pages_467/custom_actions', array(), $raw_action_name);
>>>>>>> update

				if(isset($custom_actions[$raw_action_name])) {
					$custom_actions[$raw_action_name]();
					$this->OnActionExected($action);
					return;
				} else {*/
				$actionFunction = 'indexAction';
				//}
			}

			call_user_func_array( [ $this, $actionFunction ], [] );
			$this->OnActionExected( $action );
		}

		/**
		 * @param string $string
		 * @param bool   $capitalizeFirstCharacter
		 *
		 * @return mixed
		 * @throws Exception
		 */
		protected function dashesToCamelCase( $string, $capitalizeFirstCharacter = false ) {
			$str = str_replace( ' ', '', ucwords( preg_replace( '/[-_]/', ' ', $string ) ) );

			if ( ! $capitalizeFirstCharacter ) {
				$str[0] = strtolower( $str[0] );
			}

			if ( empty( $str ) ) {
				throw new Exception( 'Dashed to camelcase parse error.' );
			}

			return $str;
		}

		/**
		 * @param $action
		 *
		 * @return bool
		 */
		protected function OnActionExecuting( $action ) {
		}

		protected function OnActionExected( $action ) {
		}

		/**
		 * @param $path
		 */
		protected function script( $path ) {
			wp_enqueue_script( $path, $path, [ 'jquery' ], false, true );
		}
	}
}