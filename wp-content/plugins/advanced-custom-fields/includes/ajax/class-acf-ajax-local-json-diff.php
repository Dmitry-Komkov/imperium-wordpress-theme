<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'ACF_Ajax_Local_JSON_Diff' ) ) :

	class ACF_Ajax_Local_JSON_Diff extends ACF_Ajax {

<<<<<<< HEAD
		/** @var string The AJAX action name. */
		var $action = 'acf/ajax/local_json_diff';

		/** @var bool Prevents access for non-logged in users. */
		var $public = false;

		/**
		 * get_response
		 *
=======
		/**
		 * The AJAX action name.
		 *
		 * @var string
		 */
		public $action = 'acf/ajax/local_json_diff';

		/**
		 * Prevents access for non-logged in users.
		 *
		 * @var bool
		 */
		public $public = false;

		/**
>>>>>>> update
		 * Returns the response data to sent back.
		 *
		 * @date    31/7/18
		 * @since   5.7.2
		 *
<<<<<<< HEAD
		 * @param   array $request The request args.
		 * @return  mixed The response data or WP_Error.
		 */
		function get_response( $request ) {
=======
		 * @param array $request The request args.
		 * @return array|WP_Error The response data or WP_Error.
		 */
		public function get_response( $request ) {
>>>>>>> update
			$json = array();

			// Extract props.
			$id = isset( $request['id'] ) ? intval( $request['id'] ) : 0;

<<<<<<< HEAD
			// Bail ealry if missing props.
=======
			// Bail early if missing props.
>>>>>>> update
			if ( ! $id ) {
				return new WP_Error( 'acf_invalid_param', __( 'Invalid field group parameter(s).', 'acf' ), array( 'status' => 404 ) );
			}

<<<<<<< HEAD
			// Disable filters and load field group directly from database.
			acf_disable_filters();
			$field_group = acf_get_field_group( $id );
			if ( ! $field_group ) {
				return new WP_Error( 'acf_invalid_id', __( 'Invalid field group ID.', 'acf' ), array( 'status' => 404 ) );
			}
			$field_group['fields']   = acf_get_fields( $field_group );
			$field_group['modified'] = get_post_modified_time( 'U', true, $field_group['ID'] );
			$field_group             = acf_prepare_field_group_for_export( $field_group );

			// Load local field group file.
			$files = acf_get_local_json_files();
			$key   = $field_group['key'];
			if ( ! isset( $files[ $key ] ) ) {
				return new WP_Error( 'acf_cannot_compare', __( 'Sorry, this field group is unavailable for diff comparison.', 'acf' ), array( 'status' => 404 ) );
			}
			$local_field_group = json_decode( file_get_contents( $files[ $key ] ), true );
=======
			$post_type = get_post_type( $id );
			if ( ! in_array( $post_type, acf_get_internal_post_types(), true ) ) {
				return new WP_Error( 'acf_invalid_post_type', __( 'Invalid post type selected for review.', 'acf' ), array( 'status' => 404 ) );
			}

			// Disable filters and load the post directly from database.
			acf_disable_filters();

			$post = acf_get_internal_post_type( $id, $post_type );
			if ( ! $post ) {
				return new WP_Error( 'acf_invalid_id', __( 'Invalid post ID.', 'acf' ), array( 'status' => 404 ) );
			}

			// Field groups also load in fields.
			if ( 'acf-field-group' === $post_type ) {
				$post['fields'] = acf_get_fields( $post );
			}

			$post['modified'] = get_post_modified_time( 'U', true, $post['ID'] );
			$post             = acf_prepare_internal_post_type_for_export( $post, $post_type );

			// Load local field group file.
			$files = acf_get_local_json_files( $post_type );
			$key   = $post['key'];
			if ( ! isset( $files[ $key ] ) ) {
				return new WP_Error( 'acf_cannot_compare', __( 'Sorry, this post is unavailable for diff comparison.', 'acf' ), array( 'status' => 404 ) );
			}
			$local_post = json_decode( file_get_contents( $files[ $key ] ), true );
>>>>>>> update

			// Render diff HTML.
			$date_format   = get_option( 'date_format' ) . ' ' . get_option( 'time_format' );
			$date_template = __( 'Last updated: %s', 'acf' );
			$json['html']  = '
		<div class="acf-diff">
			<div class="acf-diff-title">
				<div class="acf-diff-title-left">
<<<<<<< HEAD
					<strong>' . __( 'Original field group', 'acf' ) . '</strong>
					<span>' . sprintf( $date_template, wp_date( $date_format, $field_group['modified'] ) ) . '</span>
				</div>
				<div class="acf-diff-title-right">
					<strong>' . __( 'JSON field group (newer)', 'acf' ) . '</strong>
					<span>' . sprintf( $date_template, wp_date( $date_format, $local_field_group['modified'] ) ) . '</span>
				</div>
			</div>
			<div class="acf-diff-content">
				' . wp_text_diff( acf_json_encode( $field_group ), acf_json_encode( $local_field_group ) ) . '
=======
					<strong>' . __( 'Original', 'acf' ) . '</strong>
					<span>' . sprintf( $date_template, wp_date( $date_format, $post['modified'] ) ) . '</span>
				</div>
				<div class="acf-diff-title-right">
					<strong>' . __( 'JSON (newer)', 'acf' ) . '</strong>
					<span>' . sprintf( $date_template, wp_date( $date_format, $local_post['modified'] ) ) . '</span>
				</div>
			</div>
			<div class="acf-diff-content">
				' . wp_text_diff( acf_json_encode( $post ), acf_json_encode( $local_post ) ) . '
>>>>>>> update
			</div>
		</div>';
			return $json;
		}
	}

	acf_new_instance( 'ACF_Ajax_Local_JSON_Diff' );

endif; // class_exists check
