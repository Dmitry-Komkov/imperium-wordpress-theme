<?php

namespace Yoast\WP\SEO\Config;

use YoastSEO_Vendor\WordProof\SDK\Config\DefaultAppConfig;

/**
 * Class WordProof_App_Config.
 *
 * @package Yoast\WP\SEO\Config
 */
class Wordproof_App_Config extends DefaultAppConfig {

	/**
	 * Returns the partner.
	 *
	 * @return string The partner.
	 */
	public function getPartner() {
		return 'yoast';
	}

	/**
	 * Returns if the WordProof Uikit should be loaded from a cdn.
	 *
<<<<<<< HEAD
	 * @return boolean True or false.
=======
	 * @return bool True or false.
>>>>>>> update
	 */
	public function getLoadUikitFromCdn() {
		return false;
	}
}
