<<<<<<< HEAD
function wbcr_factory_logger_115_LogCleanup(element) {
=======
function wbcr_factory_logger_133_LogCleanup(element) {
>>>>>>> update
    var btn = jQuery(element),
        currentBtnText = btn.html();

    console.log(btn.data('working'), btn);

    btn.text(btn.data('working'));

    jQuery.ajax({
        url: ajaxurl,
        method: 'post',
        data: {
<<<<<<< HEAD
            action: 'wbcr_factory_logger_115_logs_cleanup',
            nonce: wbcr_factory_logger_115.clean_logs_nonce
=======
            action: 'wbcr_factory_logger_133_'+wbcr_factory_logger_133.plugin_prefix+'logs_cleanup',
            nonce: wbcr_factory_logger_133.clean_logs_nonce
>>>>>>> update
        },
        success: function (data) {
            btn.html(currentBtnText);

            jQuery('#wbcr-log-viewer').html('');
            jQuery('#wbcr-log-size').text('0B');
<<<<<<< HEAD
            jQuery.wbcr_factory_templates_102.app.showNotice(data.message, data.type);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            jQuery.wbcr_factory_templates_102.app.showNotice('Error: ' + errorThrown + ', status: ' + textStatus, 'danger');
=======
            jQuery.wbcr_factory_templates_118.app.showNotice(data.message, data.type);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            jQuery.wbcr_factory_templates_118.app.showNotice('Error: ' + errorThrown + ', status: ' + textStatus, 'danger');
>>>>>>> update
            btn.html(currentBtnText);
        }
    });
}

jQuery(document).ready(function ($) {
    var wbcr_logger_hided = false;
    $('.wbcr_logger_level').on('click', function (e) {
        var level = $(this).text();

        if (wbcr_logger_hided) {
            $('.wbcr-log-row').show()
            wbcr_logger_hided = false;
        } else {
            $('.wbcr-log-row').hide()
            $('.wbcr-log-row.wbcr_logger_level_' + level).show();
            wbcr_logger_hided = true;
        }
    });
});