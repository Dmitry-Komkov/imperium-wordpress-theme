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
	if( !class_exists('Wbcr_FactoryForms447_AccordionItemHolder') ) {
=======
	if( !class_exists('Wbcr_FactoryForms466_AccordionItemHolder') ) {
>>>>>>> update

		/**
		 * Tab Control Holder
		 *
		 * @since 1.0.0
		 */
<<<<<<< HEAD
		class Wbcr_FactoryForms447_AccordionItemHolder extends Wbcr_FactoryForms447_Holder {
=======
		class Wbcr_FactoryForms466_AccordionItemHolder extends Wbcr_FactoryForms466_Holder {
>>>>>>> update

			/**
			 * A holder type.
			 *
			 * @since 1.0.0
			 * @var string
			 */
			public $type = 'accordion-item';

			/**
			 * Here we should render a beginning html of the tab.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function beforeRendering()
			{
				?>
				<h3><?php echo $this->options['title']; ?></h3>
				<div class="factory-accordion-item">
				<div class="inner-factory-accordion-item">
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
				</div>
			<?php
			}
		}
	}