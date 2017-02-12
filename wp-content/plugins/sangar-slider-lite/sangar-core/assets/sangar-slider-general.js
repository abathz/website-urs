jQuery(function($){
	/* Open all metaboxes */
	$('#sslider_slide_core_meta').removeClass('closed');
	$('#sslider_slide_add').removeClass('closed');
	$('#sslider_configuration').removeClass('closed');
	$('#sslider_slide_management').removeClass('closed');

	// change move to trash link
	$('#submitpost #delete-action a').attr('href',post_delete_url);

	/**
	 * Modal Available Icons
	 */
	$('#layer-modal-available-icons').dialog({
        autoOpen: false,
        modal: true,
        draggable: false,
        resizable: false,
        hide: false,
        title: "Available Icons",
        dialogClass: "modal-without-tab",
        width: 665,
        height: 475
    }).parent('.ui-dialog').attr('id','sangar-slider-modal-dialog');
});

