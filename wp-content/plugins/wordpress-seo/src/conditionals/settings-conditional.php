<?php

namespace Yoast\WP\SEO\Conditionals;

/**
 * Class Settings_Conditional.
 */
class Settings_Conditional implements Conditional {

	/**
<<<<<<< HEAD
	 * Holds New_Settings_Ui_Conditional.
	 *
	 * @var New_Settings_Ui_Conditional
	 */
	protected $new_settings_ui_conditional;

	/**
	 * Holds Premium_Active_Conditional.
	 *
	 * @var Premium_Active_Conditional
	 */
	protected $premium_active_conditional;

	/**
=======
>>>>>>> update
	 * Holds User_Can_Manage_Wpseo_Options_Conditional.
	 *
	 * @var User_Can_Manage_Wpseo_Options_Conditional
	 */
	protected $user_can_manage_wpseo_options_conditional;

	/**
	 * Constructs Settings_Conditional.
	 *
<<<<<<< HEAD
	 * @param New_Settings_Ui_Conditional               $new_settings_ui_conditional               The
	 *                                                                                             New_Settings_Ui_Conditional.
	 * @param Premium_Active_Conditional                $premium_active_conditional                The
	 *                                                                                             Premium_Active_Conditional.
	 * @param User_Can_Manage_Wpseo_Options_Conditional $user_can_manage_wpseo_options_conditional The
	 *                                                                                             User_Can_Manage_Wpseo_Options_Conditional.
	 */
	public function __construct(
		New_Settings_Ui_Conditional $new_settings_ui_conditional,
		Premium_Active_Conditional $premium_active_conditional,
		User_Can_Manage_Wpseo_Options_Conditional $user_can_manage_wpseo_options_conditional
	) {
		$this->new_settings_ui_conditional               = $new_settings_ui_conditional;
		$this->premium_active_conditional                = $premium_active_conditional;
=======
	 * @param User_Can_Manage_Wpseo_Options_Conditional $user_can_manage_wpseo_options_conditional The User_Can_Manage_Wpseo_Options_Conditional.
	 */
	public function __construct(
		User_Can_Manage_Wpseo_Options_Conditional $user_can_manage_wpseo_options_conditional
	) {
>>>>>>> update
		$this->user_can_manage_wpseo_options_conditional = $user_can_manage_wpseo_options_conditional;
	}

	/**
	 * Returns whether or not this conditional is met.
	 *
	 * @return bool Whether or not the conditional is met.
	 */
	public function is_met() {
<<<<<<< HEAD
		if ( ! $this->new_settings_ui_conditional->is_met() ) {
			return false;
		}
		if ( ! $this->premium_active_conditional->is_met() ) {
			return false;
		}
=======
>>>>>>> update
		if ( ! $this->user_can_manage_wpseo_options_conditional->is_met() ) {
			return false;
		}

		return true;
	}
}
