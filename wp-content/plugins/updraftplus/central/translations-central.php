<?php

if (!defined('UPDRAFTCENTRAL_CLIENT_DIR')) die('Security check');

// Developer note: Please avoid using the 'updraftplus' string within the actual text unless it is being used as a translation domain (e.g. __('TEXT_THAT_NEEDS_TO_BE_TRANSLATED', 'updraftplus'))

// Translations for UpdraftCentral
return array(
	'updraftcentral_connection' => __('UpdraftCentral Connection', 'updraftplus'),
	'updraftcentral_connection_successful' => __('An UpdraftCentral connection has been made successfully.', 'updraftplus'),
	'updraftcentral_connection_failed' => __('A new UpdraftCentral connection has not been made.', 'updraftplus'),
	'unknown_key' => __('The key referred to was unknown.', 'updraftplus'),
	'not_logged_in' => __('You are not logged into this WordPress site in your web browser.', 'updraftplus'),
	'must_visit_url' => __('You must visit this URL in the same browser and login session as you created the key in.', 'updraftplus'),
<<<<<<< HEAD
	'security_check' => __('Security check. ', 'updraftplus'),
	'must_visit_link' => __('You must visit this link in the same browser and login session as you created the key in.', 'updraftplus'),
	'connection_already_made' => __('This connection appears to already have been made.', 'updraftplus'),
	'close' => __('Close...', 'updraftplus'),
=======
	'security_check' => __('Security check.', 'updraftplus'),
	'must_visit_link' => __('You must visit this link in the same browser and login session as you created the key in.', 'updraftplus'),
	'connection_already_made' => __('This connection appears to already have been made.', 'updraftplus'),
	'close' => __('Close', 'updraftplus'),
>>>>>>> update
	'nothing_yet_logged' => __('(Nothing yet logged)', 'updraftplus'),
	'invalid_url' => __('An invalid URL was entered', 'updraftplus'),
	'updraftcentral_key_created' => __('UpdraftCentral key created successfully', 'updraftplus'),
	'need_to_copy_key' => __('You now need to copy the key below and enter it at your %s.', 'updraftplus'),
	'press_add_site_button' => __('At your UpdraftCentral dashboard you should press the "Add Site" button then paste the key in the input box.', 'updraftplus'),
	'detailed_instructions' => __('Detailed instructions for this can be found at %s', 'updraftplus'),
	'control_this_site' => __('You can now control this site via your UpdraftCentral dashboard at %s.', 'updraftplus'),
<<<<<<< HEAD
	'attempt_to_register_failed' => __('A key was created, but the attempt to register it with %s was unsuccessful - please try again later.', 'updraftplus'),
=======
	'attempt_to_register_failed' => __('A key was created, but the attempt to register it with %1$s was unsuccessful.', 'updraftplus').' '.__('You can try again, or try using the alternative connection method if the problem persists.', 'updraftplus').' '.__('For more information visit %2$s', 'updraftplus'),
>>>>>>> update
	'key_created_successfully' => __('Key created successfully.', 'updraftplus'),
	'copy_paste_key' => __('You must copy and paste this key now - it cannot be shown again.', 'updraftplus'),
	'no_updraftcentral_dashboards' => __('There are no UpdraftCentral dashboards that can currently control this site.', 'updraftplus'),
	'unknown' => __('Unknown', 'updraftplus'),
	'access_as_user' => __('Access this site as user:', 'updraftplus'),
	'public_key_sent' => __('Public key was sent to:', 'updraftplus'),
	'created' => __('Created:', 'updraftplus'),
	'key_size' => __('Key size: %d bits', 'updraftplus'),
	'delete' => __('Delete...', 'updraftplus'),
	'manage_keys' => __('Manage existing keys (%d)...', 'updraftplus'),
	'key_description' => __('Key description', 'updraftplus'),
	'details' => __('Details', 'updraftplus'),
	'connect_to_updraftcentral_dashboard' => __('Connect this site to an UpdraftCentral dashboard found at...', 'updraftplus'),
	'in_example' => __('i.e. if you have %s there', 'updraftplus'),
	'an_account' => __('an account', 'updraftplus'),
	'self_hosted_dashboard' => __('Self-hosted dashboard', 'updraftplus'),
	'website_installed' => __('A website where you have installed %s', 'updraftplus'),
	'enter_url' => __('Enter the URL where your self-hosted install of UpdraftCentral is located:', 'updraftplus'),
	'updraftcentral_dashboard_url' => __('URL for the site of your UpdraftCentral dashboard', 'updraftplus'),
	'next' => __('Next', 'updraftplus'),
	'updraftcentral_connection_details' => __('UpdraftCentral dashboard connection details', 'updraftplus'),
	'description' => __('Description', 'updraftplus'),
	'enter_description' => __('Enter any description', 'updraftplus'),
	'encryption_key_size' => __('Encryption key size:', 'updraftplus'),
	'bits' => __('%s bits', 'updraftplus'),
	'bytes' => __('%s bytes', 'updraftplus'),
	'easy_to_break' => __('easy to break, fastest', 'updraftplus'),
	'faster' => __('faster (possibility for slow PHP installs)', 'updraftplus'),
	'recommended' => __('recommended', 'updraftplus'),
	'slower' => __('slower, strongest', 'updraftplus'),
	'use_alternative_method' => __('Use the alternative method for making a connection with the dashboard.', 'updraftplus'),
	'more_information' => __('More information...', 'updraftplus'),
	'this_is_useful' => __('This is useful if the dashboard webserver cannot be contacted with incoming traffic by this website (for example, this is the case if this website is hosted on the public Internet, but the UpdraftCentral dashboard is on localhost, or on an Intranet, or if this website has an outgoing firewall), or if the dashboard website does not have a SSL certificate.', 'updraftplus'),
	'create' => __('Create', 'updraftplus'),
	'back' => __('Back...', 'updraftplus'),
	'view_log_events' => __('View recent UpdraftCentral log events', 'updraftplus'),
	'updraftcentral_remote_control' => __('UpdraftCentral (Remote Control)', 'updraftplus'),
	'updraftcentral_description' => __('UpdraftCentral enables control of your WordPress sites %s from a central dashboard.', 'updraftplus'),
	'including_description' => array(
		'wp_optimize_desc' => __('(including management of WP-Optimize)', 'updraftplus'),
		'updraftplus_desc' => __('(including management of backups and updates)', 'updraftplus'),
	),
	'read_more' => __('Read more about it here.', 'updraftplus'),
	'create_another_key' => __('Create another key', 'updraftplus'),
	'unable_to_connect' => __('Unable to connect to the filesystem', 'updraftplus'),
<<<<<<< HEAD
	'unable_to_activate' => __('Unable to activate %s successfully. Make sure that this %s is compatible with your remote WordPress version. WordPress version currently installed in your remote website is %s.', 'updraftplus'),
	'unable_to_install' => __('Unable to install %s. Make sure that the zip file is a valid %s file and a previous version of this %s does not exist. If you wish to overwrite an existing %s then you will have to manually delete it from the %s folder on the remote website and try uploading the file again.', 'updraftplus'),
=======
	'unable_to_activate' => __('Unable to activate %s successfully.', 'updraftplus').' '.__('Make sure that this %s is compatible with your remote WordPress version.', 'updraftplus').' '.__('WordPress version currently installed in your remote website is %s.', 'updraftplus'),
	'unable_to_install' => __('Unable to install %s.', 'updraftplus').' '.__('Make sure you upload the correct file and that the zip file is a valid %s file (not corrupted) and try uploading the file again.', 'updraftplus'),
>>>>>>> update
	'failed_to_attach_media' => __('Failed to attach media.', 'updraftplus'),
	'media_attached' => __('Media has been attached to post.', 'updraftplus'),
	'failed_to_detach_media' => __('Failed to detach media.', 'updraftplus'),
	'media_detached' => __('Media has been detached from post.', 'updraftplus'),
	'failed_to_delete_media' => __('Failed to delete selected media.', 'updraftplus'),
	'selected_media_deleted' => __('Selected media has been deleted successfully.', 'updraftplus'),
	'unattached' => __('Unattached', 'updraftplus'),
	'default_template' => __('Default template', 'updraftplus'),
	'parameters_missing' => __('Expected parameter(s) missing.', 'updraftplus'),
	'fetching' => __('Fetching...', 'updraftplus'),
	'deleting' => __('Deleting...', 'updraftplus'),
	'enter_mothership_url' => __('Please enter a valid URL', 'updraftplus'),
	'creating_please_allow' => __('Creating...', 'updraftplus').(function_exists('openssl_encrypt') ? '' : ' ('.__('your PHP install lacks the openssl module; as a result, this can take minutes; if nothing has happened by then, then you should either try a smaller key size, or ask your web hosting company how to enable this PHP module on your setup.', 'updraftplus').')'),
	'unexpectedresponse' => __('Unexpected response:', 'updraftplus'),
	'updraftcentral_wizard_empty_url' => __('Please enter the URL where your UpdraftCentral dashboard is hosted.', 'updraftplus'),
	'updraftcentral_wizard_invalid_url' => __('Please enter a valid URL e.g http://example.com', 'updraftplus'),
<<<<<<< HEAD
=======
	'insufficient_privilege' => __('Sorry, you do not have enough privilege to execute the requested action.', 'updraftplus'),
	'copy_to_clipboard' => __('Copy to clipboard', 'updraftplus'),
	'key_copied' => __('The key was copied to the clipboard.', 'updraftplus'),
	'unable_to_copy' => __('The attempt to copy to the clipboard failed.', 'updraftplus'),
>>>>>>> update
);
