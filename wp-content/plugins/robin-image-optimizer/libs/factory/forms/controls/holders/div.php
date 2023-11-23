<?php
	/**
	 * The file contains the class of Div Control Holder.
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
	if( !class_exists('Wbcr_FactoryForms447_DivHolder') ) {
=======
	if( !class_exists('Wbcr_FactoryForms466_DivHolder') ) {
>>>>>>> update
		/**
		 * Div Control Holder
		 *
		 * @since 1.0.0
		 */
<<<<<<< HEAD
		class Wbcr_FactoryForms447_DivHolder extends Wbcr_FactoryForms447_Holder {
=======
		class Wbcr_FactoryForms466_DivHolder extends Wbcr_FactoryForms466_Holder {
>>>>>>> update

			/**
			 * A holder type.
			 *
			 * @since 1.0.0
			 * @var string
			 */
			public $type = 'div';

			/**
			 * Here we should render a beginning html of the tab.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function beforeRendering()
			{

				if( isset($this->options['class']) ) {
					$this->addCssClass($this->options['class']);
				}
				if( isset($this->options['id']) ) {
					$this->addHtmlAttr('id', $this->options['id']);
				}

				?>
				<div <?php $this->attrs() ?>>
			<?php
			}

			/**
			 * Here we should render an end html of the tab.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function afterRendering()
			{
				?>
				</div>
			<?php
			}
		}
	}