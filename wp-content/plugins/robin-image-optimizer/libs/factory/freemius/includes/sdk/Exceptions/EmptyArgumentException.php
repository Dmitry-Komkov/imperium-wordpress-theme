<?php
<<<<<<< HEAD
	if ( ! class_exists( 'Freemius_InvalidArgumentException' ) ) {
		exit;
	}

	if ( ! class_exists( 'Freemius_EmptyArgumentException' ) ) {
		class Freemius_EmptyArgumentException extends Freemius_InvalidArgumentException {
		}
	}
=======
namespace WBCR\Factory_Freemius_157\Sdk;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( !class_exists('WBCR\Factory_Freemius_157\Sdk\Freemius_InvalidArgumentException') ) {
	exit;
}

if( !class_exists('WBCR\Factory_Freemius_157\Sdk\Freemius_EmptyArgumentException') ) {
	class Freemius_EmptyArgumentException extends Freemius_InvalidArgumentException {

	}
}
>>>>>>> update
