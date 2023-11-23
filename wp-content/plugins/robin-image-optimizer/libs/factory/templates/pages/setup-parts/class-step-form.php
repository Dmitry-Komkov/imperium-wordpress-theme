<?php

<<<<<<< HEAD
namespace WBCR\Factory_Templates_102\Pages;
=======
namespace WBCR\Factory_Templates_118\Pages;
>>>>>>> update

/**
 * Step
 * @author Webcraftic <wordpress.webraftic@gmail.com>
 * @copyright (c) 23.07.2020, Webcraftic
 * @version 1.0
 */
class Step_Form extends Step {

<<<<<<< HEAD
	public function __construct(\WBCR\Factory_Templates_102\Pages\Setup $page)
=======
	public function __construct(\WBCR\Factory_Templates_118\Pages\Setup $page)
>>>>>>> update
	{
		parent::__construct($page);
	}

	public function get_title()
	{
		return 'Default form';
	}

	public function get_form_description()
	{
		return 'This is a sample html form, please customize the form fields, add description and title.';
	}

	public function get_form_options()
	{
		return [];
	}

	protected function instance_form($options)
	{

<<<<<<< HEAD
		$form = new \Wbcr_FactoryForms447_Form([
=======
		$form = new \Wbcr_FactoryForms466_Form([
>>>>>>> update
			'scope' => rtrim($this->plugin->getPrefix(), '_'),
			'name' => $this->page->getResultId() . "-options-" . $this->get_id()
		], $this->plugin);

<<<<<<< HEAD
		$form->setProvider(new \Wbcr_FactoryForms447_OptionsValueProvider($this->plugin));
=======
		$form->setProvider(new \Wbcr_FactoryForms466_OptionsValueProvider($this->plugin));
>>>>>>> update

		$form_options = [];

		$form_options[] = [
			'type' => 'form-group',
			'items' => $options,
			//'cssClass' => 'postbox'
		];

		if( isset($form_options[0]) && isset($form_options[0]['items']) && is_array($form_options[0]['items']) ) {
			foreach($form_options[0]['items'] as $key => $value) {

				if( $value['type'] == 'div' || $value['type'] == 'more-link' ) {
					if( isset($form_options[0]['items'][$key]['items']) && !empty($form_options[0]['items'][$key]['items']) ) {
						foreach($form_options[0]['items'][$key]['items'] as $group_key => $group_value) {
							$form_options[0]['items'][$key]['items'][$group_key]['layout']['column-left'] = '8';
							$form_options[0]['items'][$key]['items'][$group_key]['layout']['column-right'] = '4';
						}

						continue;
					}
				}

				if( in_array($value['type'], [
					'checkbox',
					'textarea',
					'integer',
					'textbox',
					'dropdown',
					'list',
					'wp-editor'
				]) ) {
					$form_options[0]['items'][$key]['layout']['column-left'] = '8';
					$form_options[0]['items'][$key]['layout']['column-right'] = '4';
				}
			}
		}

		$form->add($form_options);
		$this->set_form_handler($form);

		return $form;
	}

<<<<<<< HEAD
	protected function render_form(\Wbcr_FactoryForms447_Form $form)
	{
		?>
		<form method="post" id="w-factory-templates-102__setup-form-<?php echo $this->get_id() ?>" class="w-factory-templates-102__setup-form form-horizontal">
			<?php $form->html(); ?>
			<div class="w-factory-templates-102__form-buttons">
				<!--<input type="submit" name="skip_button_<?php /*echo $this->get_id() */ ?>" class="button-primary button button-large w-factory-templates-102__skip-button" value="<?php /*_e('Skip', 'wbcr_factory_templates_102') */ ?>">-->
				<input type="submit" name="continue_button_<?php echo $this->get_id() ?>" class="button-primary button button-large w-factory-templates-102__continue-button" value="<?php _e('Continue', 'wbcr_factory_templates_102') ?>">
=======
	protected function render_form(\Wbcr_FactoryForms466_Form $form)
	{
		?>
		<form method="post" id="w-factory-templates-118__setup-form-<?php echo $this->get_id() ?>" class="w-factory-templates-118__setup-form form-horizontal">
			<?php $form->html(); ?>
			<div class="w-factory-templates-118__form-buttons">
				<!--<input type="submit" name="skip_button_<?php /*echo $this->get_id() */ ?>" class="button-primary button button-large w-factory-templates-118__skip-button" value="<?php /*_e('Skip', 'wbcr_factory_templates_118') */ ?>">-->
				<input type="submit" name="continue_button_<?php echo $this->get_id() ?>" class="button-primary button button-large w-factory-templates-118__continue-button" value="<?php _e('Continue', 'wbcr_factory_templates_118') ?>">
>>>>>>> update
			</div>
		</form>
		<?php
	}

<<<<<<< HEAD
	protected function set_form_handler(\Wbcr_FactoryForms447_Form $form)
=======
	protected function set_form_handler(\Wbcr_FactoryForms466_Form $form)
>>>>>>> update
	{
		if( isset($_POST['continue_button_' . $this->get_id()]) ) {
			$form->save();
			do_action('wbcr/factory/clearfy/setup_wizard/saved_options');
			$this->continue_step();
		}

		if( isset($_POST['skip_button_' . $this->get_id()]) ) {

			$this->skip_step();
		}
	}

	public function html()
	{
		$form_options = $this->get_form_options();

		if( empty($form_options) ) {
			echo 'Html form is not configured.';

			return;
		}

		$form = $this->instance_form($this->get_form_options());
		?>
		<div id="WBCR" class="wrap">
<<<<<<< HEAD
			<div class="wbcr-factory-templates-102-impressive-page-template factory-bootstrap-450 factory-fontawesome-000">
				<div class="w-factory-templates-102-setup__inner-wrap">
=======
			<div class="wbcr-factory-templates-118-impressive-page-template factory-bootstrap-470 factory-fontawesome-000">
				<div class="w-factory-templates-118-setup__inner-wrap">
>>>>>>> update
					<h3><?php echo $this->get_title(); ?></h3>
					<p style="text-align: left;"><?php echo $this->get_form_description(); ?></p>
				</div>
				<?php $this->render_form($form); ?>
			</div>
		</div>
		<?php
	}

}