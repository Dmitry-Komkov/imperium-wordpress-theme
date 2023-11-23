<?php

<<<<<<< HEAD
add_action( 'init', 'wpcf7_init_block_editor_assets', 10, 0 );
=======
add_action(
	'init',
	'wpcf7_init_block_editor_assets',
	10, 0
);
>>>>>>> update

function wpcf7_init_block_editor_assets() {
	$assets = array();

	$asset_file = wpcf7_plugin_path(
		'includes/block-editor/index.asset.php'
	);

	if ( file_exists( $asset_file ) ) {
		$assets = include( $asset_file );
	}

	$assets = wp_parse_args( $assets, array(
<<<<<<< HEAD
		'src' => wpcf7_plugin_url( 'includes/block-editor/index.js' ),
		'dependencies' => array(
			'wp-api-fetch',
			'wp-components',
			'wp-compose',
			'wp-blocks',
			'wp-element',
			'wp-i18n',
=======
		'dependencies' => array(
			'wp-api-fetch',
			'wp-block-editor',
			'wp-blocks',
			'wp-components',
			'wp-element',
			'wp-i18n',
			'wp-url',
>>>>>>> update
		),
		'version' => WPCF7_VERSION,
	) );

	wp_register_script(
		'contact-form-7-block-editor',
<<<<<<< HEAD
		$assets['src'],
=======
		wpcf7_plugin_url( 'includes/block-editor/index.js' ),
>>>>>>> update
		$assets['dependencies'],
		$assets['version']
	);

	wp_set_script_translations(
		'contact-form-7-block-editor',
		'contact-form-7'
	);

	register_block_type(
<<<<<<< HEAD
		'contact-form-7/contact-form-selector',
=======
		wpcf7_plugin_path( 'includes/block-editor' ),
>>>>>>> update
		array(
			'editor_script' => 'contact-form-7-block-editor',
		)
	);
<<<<<<< HEAD

	$contact_forms = array_map(
		function ( $contact_form ) {
			return array(
				'id' => $contact_form->id(),
=======
}


add_action(
	'enqueue_block_editor_assets',
	'wpcf7_enqueue_block_editor_assets',
	10, 0
);

function wpcf7_enqueue_block_editor_assets() {
	$contact_forms = array_map(
		static function ( $contact_form ) {
			return array(
				'id' => $contact_form->id(),
				'hash' => $contact_form->hash(),
>>>>>>> update
				'slug' => $contact_form->name(),
				'title' => $contact_form->title(),
				'locale' => $contact_form->locale(),
			);
		},
		WPCF7_ContactForm::find( array(
			'posts_per_page' => 20,
<<<<<<< HEAD
=======
			'orderby' => 'modified',
			'order' => 'DESC',
>>>>>>> update
		) )
	);

	wp_add_inline_script(
		'contact-form-7-block-editor',
		sprintf(
			'window.wpcf7 = {contactForms:%s};',
			json_encode( $contact_forms )
		),
		'before'
	);
<<<<<<< HEAD

=======
>>>>>>> update
}
