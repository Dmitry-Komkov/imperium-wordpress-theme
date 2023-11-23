<?php
	if (!defined('UPDRAFTPLUS_DIR')) die('No direct access allowed');
?>
<div class="advanced_tools export_settings">
	<h3><?php _e('Export / import settings', 'updraftplus');?></h3>
	<p>
<<<<<<< HEAD
		<?php printf(__('Here, you can export your UpdraftPlus settings (%s), either for using on another site, or to keep as a backup. This tool will export what is currently in the settings tab.', 'updraftplus'), '<strong>'.__('including any passwords', 'updraftplus').'</strong>');?>
=======
		<?php echo sprintf(__('Here, you can export your UpdraftPlus settings (%s), either for using on another site, or to keep as a backup.', 'updraftplus'), '<strong>'.__('including any passwords', 'updraftplus').'</strong>').' '.__('This tool will export what is currently in the settings tab.', 'updraftplus');?>
>>>>>>> update
	</p>
	<button type="button" style="clear:left;" class="button-primary" id="updraftplus-settings-export"><?php _e('Export settings', 'updraftplus');?></button>
	
	<p>
<<<<<<< HEAD
		<?php _e('You can also import previously-exported settings. This tool will replace all your saved settings.', 'updraftplus'); ?>
=======
		<?php echo __('You can also import previously-exported settings.', 'updraftplus').' '.__('This tool will replace all your saved settings.', 'updraftplus'); ?>
>>>>>>> update
	</p>
	
	<button type="button" style="clear:left;" class="button-primary" id="updraftplus-settings-import"><?php _e('Import settings', 'updraftplus');?></button>
	<input type="file" name="settings_file" id="import_settings">
</div>