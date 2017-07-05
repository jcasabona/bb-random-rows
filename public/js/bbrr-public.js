(function( $ ) {
	'use strict';

	$(document).on('ready', function BBRandomRowSelector() {
		if ( ! hasParameter('fl_builder') ) {
			var bb_random_row = Math.floor(Math.random() * $('.fl-row.bbrr-row').length);
			$('.fl-row.bbrr-row').hide().eq(bb_random_row).show();
		}
	});

})( jQuery );

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function hasParameter(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
				return ( null !== results );
}
