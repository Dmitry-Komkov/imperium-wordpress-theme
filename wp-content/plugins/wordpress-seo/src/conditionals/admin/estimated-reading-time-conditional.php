<?php

namespace Yoast\WP\SEO\Conditionals\Admin;

use Yoast\WP\SEO\Conditionals\Conditional;
<<<<<<< HEAD
use Yoast\WP\SEO\Helpers\Input_Helper;
=======
>>>>>>> update

/**
 * Conditional that is only when we want the Estimated Reading Time.
 */
class Estimated_Reading_Time_Conditional implements Conditional {

	/**
	 * The Post Conditional.
	 *
	 * @var Post_Conditional
	 */
	protected $post_conditional;

	/**
<<<<<<< HEAD
	 * The Input Helper.
	 *
	 * @var Input_Helper
	 */
	protected $input_helper;

	/**
	 * Constructs the Estimated Reading Time Conditional.
	 *
	 * @param Post_Conditional $post_conditional The post conditional.
	 * @param Input_Helper     $input_helper     The input helper.
	 */
	public function __construct( Post_Conditional $post_conditional, Input_Helper $input_helper ) {
		$this->post_conditional = $post_conditional;
		$this->input_helper     = $input_helper;
	}

	/**
	 * Returns whether or not this conditional is met.
	 *
	 * @return bool Whether or not the conditional is met.
	 */
	public function is_met() {
		// Check if we are in our Elementor ajax request (for saving).
		if ( \wp_doing_ajax() ) {
			$post_action = $this->input_helper->filter( \INPUT_POST, 'action', \FILTER_SANITIZE_STRING );
=======
	 * Constructs the Estimated Reading Time Conditional.
	 *
	 * @param Post_Conditional $post_conditional The post conditional.
	 */
	public function __construct( Post_Conditional $post_conditional ) {
		$this->post_conditional = $post_conditional;
	}

	/**
	 * Returns whether this conditional is met.
	 *
	 * @return bool Whether the conditional is met.
	 */
	public function is_met() {
		// phpcs:disable WordPress.Security.NonceVerification.Recommended,WordPress.Security.NonceVerification.Missing -- Reason: Nonce verification should not be done in a conditional but rather in the classes using the conditional.
		// Check if we are in our Elementor ajax request (for saving).
		if ( \wp_doing_ajax() && isset( $_POST['action'] ) && \is_string( $_POST['action'] ) ) {
			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Reason: We are only strictly comparing the variable.
			$post_action = \wp_unslash( $_POST['action'] );
>>>>>>> update
			if ( $post_action === 'wpseo_elementor_save' ) {
				return true;
			}
		}

		if ( ! $this->post_conditional->is_met() ) {
			return false;
		}

		// We don't support Estimated Reading Time on the attachment post type.
<<<<<<< HEAD
		$post_id = (int) $this->input_helper->filter( \INPUT_GET, 'post', \FILTER_SANITIZE_NUMBER_INT );
		if ( \get_post_type( $post_id ) === 'attachment' ) {
			return false;
		}

		return true;
=======
		if ( isset( $_GET['post'] ) && \is_string( $_GET['post'] ) ) {
			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Reason: We are casting to an integer.
			$post_id = (int) \wp_unslash( $_GET['post'] );
			if ( $post_id !== 0 && \get_post_type( $post_id ) === 'attachment' ) {
				return false;
			}
		}

		return true;
		// phpcs:enable WordPress.Security.NonceVerification.Recommended,WordPress.Security.NonceVerification.Missing
>>>>>>> update
	}
}
