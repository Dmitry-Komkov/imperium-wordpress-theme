<?php

	/**
	 * Color
	 *
	 * Main options:
	 *  name            => a name of the control
	 *  value           => a value to show in the control
	 *  default         => a default value of the control if the "value" option is not specified
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
	if( !class_exists('Wbcr_FactoryForms447_ColorControl') ) {

		class Wbcr_FactoryForms447_ColorControl extends Wbcr_FactoryForms447_Control {
=======
	if( !class_exists('Wbcr_FactoryForms466_ColorControl') ) {

		class Wbcr_FactoryForms466_ColorControl extends Wbcr_FactoryForms466_Control {
>>>>>>> update

			public $type = 'color';

			/**
			 * Shows the html markup of the control.
			 *
			 * @since 1.0.0
			 * @return void
			 */
			public function html()
			{
				$name = $this->getNameOnForm();
				$value = esc_attr($this->getValue());

				if( !$value ) {
					$value = '#1e8cbe';
				}

				// the "pickerTarget" options allows to select element where the palette will be shown
				$picker_target = $this->getOption('pickerTarget');

				if( !empty($picker_target) ) {
					$this->addHtmlData('picker-target', $picker_target);
				}

				?>
				<div <?php $this->attrs() ?>>
					<div class="factory-background" <?php echo(!empty($value)
						? 'style="background:' . $value . ';"'
						: ''); ?>></div>
					<div class="factory-pattern"></div>
<<<<<<< HEAD
					<input type="text" id="<?php echo $name; ?>" name="<?php echo $name; ?>" class="factory-input-text factory-color-hex" value="<?php echo $value; ?>">
=======
					<input type="text" id="<?php echo esc_attr($name); ?>" name="<?php echo esc_attr($name); ?>" class="factory-input-text factory-color-hex" value="<?php echo esc_attr($value); ?>">
>>>>>>> update
				</div>
			<?php
			}
		}
	}