<?php

class WPCF7_SWV_TelRule extends WPCF7_SWV_Rule {

	const rule_name = 'tel';

	public function matches( $context ) {
		if ( false === parent::matches( $context ) ) {
			return false;
		}

		if ( empty( $context['text'] ) ) {
			return false;
		}

		return true;
	}

	public function validate( $context ) {
		$field = $this->get_property( 'field' );
		$input = isset( $_POST[$field] ) ? $_POST[$field] : '';
		$input = wpcf7_array_flatten( $input );
		$input = wpcf7_exclude_blank( $input );

		foreach ( $input as $i ) {
			if ( ! wpcf7_is_tel( $i ) ) {
				return new WP_Error( 'wpcf7_invalid_tel',
					$this->get_property( 'error' )
				);
			}
		}

		return true;
	}

<<<<<<< HEAD
	public function to_array() {
		return array( 'rule' => self::rule_name ) + (array) $this->properties;
	}
=======
>>>>>>> update
}
