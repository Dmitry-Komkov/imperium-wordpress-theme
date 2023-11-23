<?php
	/**
	 * The file contains the class of Tab Control Holder.
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
	if( !class_exists('Wbcr_FactoryForms447_AccordionHolder') ) {
=======
	if( !class_exists('Wbcr_FactoryForms466_AccordionHolder') ) {
>>>>>>> update
		/**
		 * Tab Control Holder
		 *
		 * @since 1.0.0
		 */
<<<<<<< HEAD
		class Wbcr_FactoryForms447_AccordionHolder extends Wbcr_FactoryForms447_Holder {
=======
		class Wbcr_FactoryForms466_AccordionHolder extends Wbcr_FactoryForms466_Holder {
>>>>>>> update

			/**
			 * A holder type.
			 *
			 * @since 1.0.0
			 * @var string
			 */
			public $type = 'accordion';

			/**
			 * Here we should render a beginning html of the tab.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function beforeRendering()
			{
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