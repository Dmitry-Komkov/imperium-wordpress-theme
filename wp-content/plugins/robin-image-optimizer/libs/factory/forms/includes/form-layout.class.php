<?php
	/**
	 * The file contains the base class for all form layouts.
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
	if( !class_exists('Wbcr_FactoryForms447_FormLayout') ) {
=======
	if( !class_exists('Wbcr_FactoryForms466_FormLayout') ) {
>>>>>>> update

		/**
		 * The base class for all form layouts.
		 */
<<<<<<< HEAD
		abstract class Wbcr_FactoryForms447_FormLayout extends Wbcr_FactoryForms447_Holder {
=======
		abstract class Wbcr_FactoryForms466_FormLayout extends Wbcr_FactoryForms466_Holder {
>>>>>>> update

			/**
			 * A form layout name.
			 *
			 * @since 1.0.0
			 * @var string
			 */
			protected $name = 'default';

			/**
			 * A holder type.
			 *
			 * @since 1.0.0
			 * @var string
			 */
			protected $type = 'form-layout';

			/**
			 * Creates a new instance of a form layout.
			 *
			 * @since 1.0.0
			 * @param mixed[] $options A holder options.
<<<<<<< HEAD
			 * @param Wbcr_FactoryForms447_Form $form A parent form.
=======
			 * @param Wbcr_FactoryForms466_Form $form A parent form.
>>>>>>> update
			 */
			public function __construct($options, $form)
			{

				$options['name'] = $this->name;
				$options['items'] = $form->getItems();

				parent::__construct($options, $form);

<<<<<<< HEAD
				$this->addCssClass('factory-forms-447-' . $this->type);
				$this->addCssClass('factory-forms-447-' . $this->name);
=======
				$this->addCssClass('factory-forms-466-' . $this->type);
				$this->addCssClass('factory-forms-466-' . $this->name);
>>>>>>> update
			}

			/**
			 * Renders a beginning of a form.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function beforeRendering()
			{
				echo '<div ';
				$this->attrs();
				echo '>';
			}

			/**
			 * Renders the end of a form.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function afterRendering()
			{
				echo '</div>';
			}

			/**
			 * Rendering some html before a holder.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function beforeHolder($element)
			{
			}

			/**
			 * Rendering some html after a holder.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function afterHolder($element)
			{
			}

			/**
			 * Rendering some html before a contol.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function beforeControl($element)
			{
			}

			/**
			 * Rendering some html after a contol.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function afterControl($element)
			{
			}
		}
	}