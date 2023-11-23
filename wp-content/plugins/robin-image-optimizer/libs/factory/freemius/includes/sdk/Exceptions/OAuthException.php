<?php
<<<<<<< HEAD
	if ( ! class_exists( 'Freemius_Exception' ) ) {
		exit;
	}

	if ( ! class_exists( 'Freemius_OAuthException' ) ) {
		class Freemius_OAuthException extends Freemius_Exception {
			public function __construct( $pResult ) {
				parent::__construct( $pResult );
			}
		}
	}
=======

namespace WBCR\Factory_Freemius_157\Sdk;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( !class_exists('WBCR\Factory_Freemius_157\Sdk\Freemius_Exception') ) {
	exit;
}

if( !class_exists('WBCR\Factory_Freemius_157\Sdk\Freemius_OAuthException') ) {
	class Freemius_OAuthException extends Freemius_Exception {

		public function __construct($pResult)
		{
			parent::__construct($pResult);
		}
	}
}
>>>>>>> update
