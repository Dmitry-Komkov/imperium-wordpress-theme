<?php

	/**
	 * Url Control
	 *
	 * Main options:
<<<<<<< HEAD
	 * @see FactoryForms447_TextboxControl
=======
	 * @see FactoryForms466_TextboxControl
>>>>>>> update
	 *
	 * @author Alex Kovalev <alex.kovalevv@gmail.com>
	 * @copyright (c) 2018, Webcraftic Ltd
	 *
	 * @package factory-forms
	 * @since 1.0.0
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

<<<<<<< HEAD
	if( !class_exists('Wbcr_FactoryForms447_UrlControl') ) {

		class Wbcr_FactoryForms447_UrlControl extends Wbcr_FactoryForms447_TextboxControl {
=======
	if( !class_exists('Wbcr_FactoryForms466_UrlControl') ) {

		class Wbcr_FactoryForms466_UrlControl extends Wbcr_FactoryForms466_TextboxControl {
>>>>>>> update

			public $type = 'url';

			/**
			 * Adding 'http://' to the url if it was missed.
			 *
			 * @since 1.0.0
			 * @return string
			 */
			public function getSubmitValue($name, $sub_name)
			{
				$value = parent::getSubmitValue($name, $sub_name);
				if( !empty($value) && substr($value, 0, 4) != 'http' ) {
					$value = 'http://' . $value;
				}

				return $value;
			}
		}
	}
